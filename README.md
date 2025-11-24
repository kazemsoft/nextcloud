# Nextcloud Docker Deployment

This project provides a secure, production-ready Nextcloud deployment using Docker Compose, PostgreSQL, and Redis.

## Prerequisites

- Git
- Docker & Docker Compose
- A reverse proxy (Nginx, Caddy, Traefik) set up to handle SSL/TLS.

## Quick Start

1.  **Clone the repository:**
    ```bash
    git clone <repository_url>
    cd <repository_name>
    ```

2.  **Configure Environment:**
    The `.env` file has been pre-configured with your generated settings. 
    Ensure strict permissions on this file:
    ```bash
    chmod 600 .env
    ```

3.  **Start the Stack:**
    ```bash
    docker compose up -d
    ```

4.  **Finish Setup:**
    Access Nextcloud at `http://127.0.0.1:8080` initially, or configure your reverse proxy to point to this port.

## Security & Reverse Proxy

**CRITICAL:** This setup listens on `127.0.0.1:8080`. You **MUST** put a reverse proxy in front of it to handle HTTPS.

After setting up your proxy (e.g., Nginx pointing to port 8080), run the following to configure Nextcloud for reverse proxying:

```bash
docker exec -u www-data nextcloud_app php occ config:system:set trusted_proxies 1 --value='127.0.0.1'
docker exec -u www-data nextcloud_app php occ config:system:set overwritehost --value='localhost'
docker exec -u www-data nextcloud_app php occ config:system:set overwriteprotocol --value='https'
```

## Maintenance

- **Backup:** Back up the `nextcloud_data` and `db_data` Docker volumes regularly.
- **Update:** Pull new images and restart:
    ```bash
    docker compose pull
    docker compose up -d
    ```
