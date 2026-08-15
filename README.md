# Sabino Compu Service — Proyecto PHP nativo

Sitio web corporativo de **Sabino Compu Service** migrado 100 % desde WordPress a un
**proyecto nativo en PHP**, desarrollado y ejecutado directamente en **VS Code**. No hay
WordPress, no hay base de datos ni dependencias externas: solo PHP, HTML, CSS y JS.
ejecutar 
cd sabino-php 

php -S localhost:8000 -t public


## Estructura del proyecto

```
sabino-php/
├─ public/                  ← RAÍZ WEB (es la carpeta que se publica)
│  ├─ index.php             ← Página de inicio
│  ├─ privacidad.php        ← Política de privacidad
│  ├─ .htaccess             ← Configuración Apache (opcional)
│  └─ assets/
│     ├─ css/               ← Bootstrap, estilos del tema, FontAwesome, animaciones
│     ├─ js/                ← jQuery, Bootstrap JS, menú móvil, etc.
│     ├─ webfonts/          ← Fuentes iconográficas (FontAwesome)
│     └─ img/               ← Logo, fondos e imágenes del sitio
├─ includes/                ← Código de plantillas (NO publicar)
│  ├─ config.php            ← ★ TODO el contenido editable del sitio
│  ├─ functions.php         ← Helpers (site_config, esc)
│  ├─ header.php            ← Cabecera y navegación común
│  ├─ footer.php            ← Pie de página y scripts comunes
│  └─ sections/             ← Secciones de la portada (hero, features, servicios)
└─ README.md
```

## Cómo ejecutar el proyecto en VS Code

### ✅ Opción A — Lanzador automático (recomendado)
Ejecutá el archivo **`run.bat`** desde la terminal (o haciendo doble clic en la carpeta `sabino-php`):

```
cd sabino-php
run.bat
```

El script:
1. verifica que PHP esté instalado,
2. levanta el servidor en `http://localhost:8000` sobre la raíz `public`,
3. **abre automáticamente el navegador** con el sitio (igual que hacía Local al iniciar WordPress).

Para detenerlo, presioná `Ctrl+C` en la terminal.

> Requisito: tener PHP 8.x en el `PATH`. Si no lo tenés:
> - descargalo en https://windows.php.net/download y agregá la carpeta al PATH, o
> - usá la Opción B.

### Opción B — Terminal integrada de VS Code
1. Abrí la carpeta `sabino-php` en VS Code.
2. Abrí una terminal (`Ctrl + ñ`).
3. Ejecutá:
   ```bash
   php -S localhost:8000 -t public
   ```
4. Abrí en el navegador: **http://localhost:8000**

### Opción C — Extensión "PHP Server" de VS Code
1. Instalá la extensión **PHP Server** (beyondthat) desde el marketplace.
2. Abrí `public/index.php` y pulsá `F1` → **PHP Server: Serve project**.
3. La extensión levanta el `php -S` y abre el navegador automáticamente.

### Opción D — Hosting / Apache / Nginx
- Subí **SOLO la carpeta `public/`** como raíz del dominio (los archivos de `includes/`
  nunca deben ser públicos).
- Con Apache funciona de fábrica (`.htaccess`). Con Nginx apuntá la raíz a `public/`.

## Cómo editar el contenido

Todo el contenido está en **`includes/config.php`**:

| Qué querés cambiar       | Clave en `config.php`                        |
|--------------------------|---------------------------------------------|
| Nombre / lema           | `site_name`, `site_tagline`              |
| Teléfono y email        | `phone`, `phone_link`, `email`           |
| Horarios               | `timing_heading`, `timing`               |
| Botón principal (CTA)  | `header_btn_text`, `header_btn_link`     |
| Redes sociales         | `social_twitter`, `social_instagram`, ... |
| Título y botones hero  | `hero_*`                                 |
| Título sección servicios | `services_*`                             |
| Tarjetas de servicios  | array `services`                          |
| 8 cajas de features   | array `features`                          |
| Colores                | array `colors`                            |
| Menú del header        | array `menu`                              |
| Texto del footer      | `footer_copy`                             |

## Notas

- Las imágenes originales del sitio (logo, fondos y foto principal) se copiaron desde la
  instalación WordPress y quedan en `public/assets/img/`.
- Ningún archivo del proyecto contiene referencias a WordPress (`wp-*`, `get_theme_mod()`,
  `wp_head()`, etc.).
- La instalación WordPress original queda intacta en la carpeta `sabino - copia` como respaldo.