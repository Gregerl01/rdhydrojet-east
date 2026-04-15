# Deployment Pipeline — RD Hydrojet East

## Architecture

- **Hosting:** Hostinger shared hosting (LiteSpeed)
- **Deploy method:** GitHub Actions + SSH + rsync (theme files only)
- **Branch:** `main` → production (rdhydrojeteast.com)
- **Default working branch:** `dev`

## Environments

| Environment | URL | Branch | Auto-deploy |
|---|---|---|---|
| Local | rd-hydrojet-east.local | dev | N/A |
| Production | rdhydrojeteast.com | main | Yes (with approval gate) |

## Safety Layers

1. **Path validation** — Checks PROD_DEPLOY_PATH contains wp-content/themes/ and is 6+ levels deep
2. **Remote verification** — Confirms style.css exists at target directory
3. **Auto-backup** — Copies current theme before every deploy (keeps last 3)
4. **Dry run** — Logs what rsync would change before doing it
5. **Manual approval** — Production deploys pause for reviewer approval
6. **Health check** — Curls site URL after deploy to verify HTTP 200

## Daily Workflow

1. Work on `dev` branch locally
2. `npm run build` before committing
3. Commit and push to `dev`
4. When ready for production: `git checkout main && git merge dev && git push origin main`
5. Go to GitHub Actions, approve the deploy
6. Verify on rdhydrojeteast.com

## What Goes Through Git (Theme Code)

PHP templates, SCSS/CSS, JS, functions.php, compiled CSS/JS, theme assets, docs.

## What Does NOT Go Through Git

WordPress core, plugins, uploads, wp-config.php, database content, Customizer settings.

## GitHub Secrets (5 total)

| Secret | Description |
|---|---|
| `SSH_HOST` | Hostinger server hostname |
| `SSH_PORT` | SSH port (usually 65002 for Hostinger) |
| `SSH_USER` | SSH username |
| `SSH_KEY` | Full private key (ed25519 or RSA) |
| `PROD_DEPLOY_PATH` | Full server path to theme directory (must end with /) |

## Server Details

- Theme folder on server: `starter-theme`
- Deploy path: `/home/u772682663/domains/rdhydrojeteast.com/public_html/wp-content/themes/starter-theme/`

## First-Time Setup

1. Generate SSH key pair: `ssh-keygen -t ed25519 -C "github-deploy"`
2. Add public key to Hostinger: SSH Access → Manage SSH Keys
3. Add private key as `SSH_KEY` secret in GitHub repo settings
4. Add remaining 4 secrets (SSH_HOST, SSH_PORT, SSH_USER, PROD_DEPLOY_PATH)
5. Create a GitHub Environment named `production` with required reviewers
6. Push to `main` to trigger first deploy

## Rollback

If a deploy causes issues:
1. SSH into server
2. Navigate to `/wp-content/themes/.theme-backups/`
3. Copy the most recent backup over the live theme directory
4. Clear LiteSpeed cache
