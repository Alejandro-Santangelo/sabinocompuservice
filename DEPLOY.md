# 📚 Documentación de despliegue — Sabino Compu Service

> Este archivo resume TODO el proceso de despliegue del sitio. Si en el futuro
> tenés dudas o problemas, leé este archivo (o pedile a una IA que lo lea).

---

## 🔗 URLs importantes

| Qué | URL |
|-----|-----|
| **Repositorio GitHub** | https://github.com/Alejandro-Santangelo/sabinocompuservice |
| **Sitio en Render (URL temporal)** | https://sabino-compu-service.onrender.com |
| **Dominio principal** | https://sabinocompuservice.com.ar |
| **Panel de Render** | https://dashboard.render.com |
| **Panel de Cloudflare** | https://dash.cloudflare.com |
| **Panel de NIC Argentina** | https://nic.ar |

---

## 🏗️ Arquitectura del despliegue

```
GitHub (código)
   │  push a la rama "main"
   ▼
Render (servicio "sabino-compu-service", plan Free)
   │  construye la imagen Docker y despliega
   ▼
Sitio web (PHP 8.2 + Apache)
   │
   ▼
Dominio sabinocompuservice.com.ar
   (DNS gestionado por Cloudflare, delegado desde NIC Argentina)
```

### Flujo de deploy automático

1. Editás el código en VS Code
2. Hacés `git push` a la rama `main`
3. Render detecta el cambio y **redeploya automáticamente**
4. El sitio se actualiza solo (tarda 2-5 minutos)

---

## 🖥️ Cómo hacer cambios al sitio

```bash
# 1. Abrí la terminal en la carpeta sabino-php
cd "c:\Users\Usuario\Local Sites\sabino - copia\sabino-php"

# 2. Editá los archivos que necesites (ej: includes/config.php)

# 3. Subí los cambios
git add -A
git commit -m "describí qué cambiaste"
git push
```

Render redeploya automáticamente. No hay que tocar nada más.

### Para probar el sitio localmente (sin subir nada)

```bash
cd "c:\Users\Usuario\Local Sites\sabino - copia\sabino-php"
php -S localhost:8000 -t public
# o ejecutá run.bat
```

---

## 📁 Archivos clave del deploy

| Archivo | Para qué sirve |
|---------|----------------|
| `Dockerfile` | Define la imagen: PHP 8.2 + Apache, sirviendo desde `public/` |
| `.dockerignore` | Archivos que NO se suben al build de Docker |
| `render.yaml` | Configuración del Blueprint de Render (deploy automático) |
| `.gitignore` | Archivos que NO se suben a GitHub |
| `public/` | Raíz web (lo que se publica) |
| `includes/` | Código de plantillas (NO se publica directamente) |

### Contenido del Dockerfile (explicado)

```dockerfile
FROM php:8.2-apache
# Cambia el document root de Apache a public/ (donde está index.php)
RUN sed -ri -e 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf
# Habilita mod_rewrite y permite .htaccess
RUN a2enmod rewrite && sed -ri -e 's!AllowOverride None!AllowOverride All!g' /etc/apache2/apache2.conf
# Copia el proyecto
COPY . /var/www/html/
```

---

## 🌐 Configuración DNS (Cloudflare + NIC Argentina)

### Registros DNS en Cloudflare

| Tipo | Nombre | Contenido |
|------|--------|-----------|
| A | `@` | `216.24.57.1` |
| CNAME | `www` | `sabino-compu-service.onrender.com` |

### Nameservers de Cloudflare (delegados en NIC Argentina)

```
marlowe.ns.cloudflare.com
scott.ns.cloudflare.com
```

### IPs de los nameservers (por si NIC Argentina las pide)

- `marlowe.ns.cloudflare.com` → `108.162.194.212`
- `scott.ns.cloudflare.com` → `172.64.33.230`

---

## 🔧 Cambios importantes que se hicieron

### 1. Fix del header (id="header")

El elemento `<header>` no tenía el atributo `id="header"`, pero todo el CSS
usaba selectores `#header`. Se corrigió en `includes/header.php`:

```html
<header id="header">
```

### 2. Fix del document root de Apache

Render no tiene runtime nativo de PHP, así que se usa Docker. El primer intento
con `APACHE_DOCUMENT_ROOT` no funcionó, así que se cambió el document root
directamente con `sed` en el Dockerfile.

### 3. Layout del logo (título en la misma línea)

Se cambió el layout del header de CSS Grid a Flexbox para que el título
("Sabino Compu Service") quede en la misma línea que el logo, con la
descripción debajo. Se envuelve título + descripción en `.site-branding`.

---

## ⚠️ Notas importantes

### Plan Free de Render

- El servicio **se duerme tras 15 minutos sin visitas**
- La primera visita después de eso tarda ~30-50 segundos en "despertar"
- Para evitarlo, pasar al plan **Starter** ($7/mes) en Render → Settings → Instance Type

### Propagación DNS

- Los cambios de DNS pueden tardar **horas o hasta 24-48h** en propagarse
- Si el dominio no carga, esperar y volver a probar

---

## 🛠️ Solución de problemas

| Problema | Posible solución |
|----------|------------------|
| El sitio no carga en el dominio | Esperar a que el DNS se propague (hasta 48h) |
| Error 403 en el sitio | Verificar que el document root sea `public/` en el Dockerfile |
| El sitio tarda en abrir | Es el "cold start" del plan Free de Render |
| El deploy falla | Ver los logs en Render → servicio → Logs |
| No se ven los cambios | Verificar que hiciste `git push` a `main` |
| El header se ve mal | Verificar que `<header>` tenga `id="header"` |

---

## 👤 Datos de acceso

- **GitHub**: usuario `alejandro-santangelo` (Alejandro-Santangelo)
- **Render**: cuenta vinculada a GitHub
- **Cloudflare**: cuenta con email `artesaniaslarustica@gmail.com`
- **NIC Argentina**: dominio `sabinocompuservice.com.ar` (titular: Alejandro Vicente Santangelo)
