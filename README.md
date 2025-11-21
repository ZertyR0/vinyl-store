# f1-store

Breve descripción
------------------

Proyecto WordPress para una tienda llamada `f1-store` (merchandising/tienda online). Este repositorio contiene la instalación de WordPress y el contenido del sitio. Usa XAMPP para ejecutar localmente en Windows.

Tema elegido
------------

Se detectó el siguiente tema en `wp-content/themes/`:

- `astra`

Si tu tema activo es otro, reemplaza este texto por el tema que estés usando (por ejemplo `twentytwentyfive`, `twentytwentytwo`, etc.).

Pasos para ejecutar el sitio en local (Windows + XAMPP)
---------------------------------------------------

1. Requisitos
	- Tener instalado XAMPP (Apache + MySQL).
	- Git instalado si vas a clonar el repositorio.

2. Clonar o colocar el proyecto
	- Si aún no está en `htdocs`, clona el repo o copia los archivos a `C:\xampp\htdocs\f1store`.

3. Crear la base de datos
	- Puedes usar `phpMyAdmin` (http://localhost/phpmyadmin/) o la línea de comandos MySQL.
	- Ejemplo con PowerShell (ajusta el usuario/contraseña según tu instalación):

```powershell
mysql -u root
CREATE DATABASE f1store_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
exit
```

4. Configurar WordPress
	- Copia el archivo de configuración de ejemplo y edítalo con tus credenciales:

```powershell
Copy-Item wp-config-sample.php wp-config.php
# Luego abre wp-config.php y modifica DB_NAME, DB_USER, DB_PASSWORD y DB_HOST
```

5. Importar una copia de la base de datos (opcional)
	- Si tienes un volcado SQL del sitio, impórtalo en la base de datos creada desde `phpMyAdmin` o usando `mysql`:

```powershell
mysql -u root f1store_db < backup.sql
```

6. Permisos y uploads
	- Asegúrate de que la carpeta `wp-content/uploads` exista y sea escribible por Apache.

7. Iniciar servicios y acceder al sitio
	- Abre el XAMPP Control Panel y arranca Apache y MySQL.
	- Abre tu navegador en: `http://localhost/f1store/` (o la ruta/vhost que uses).

Consejos de seguridad y Git
--------------------------

- No subas credenciales: `wp-config.php` y archivos `.env` deben estar en `.gitignore` (ya añadido).
- Si ya están comiteados y quieres que dejen de trackearse sin borrarlos localmente, puedes ejecutar desde la raíz del repo:

```powershell
git rm --cached wp-config.php
git rm --cached .env
git rm --cached -r wp-content/uploads
git commit -m "Stop tracking local/sensitive files"
git push
```

Si quieres eliminar archivos sensibles del historial de Git (borrado definitivo), avísame y te guío con `git filter-repo` o BFG.

---

Actualiza este `README.md` si quieres una descripción más larga, capturas de pantalla o instrucciones para Docker/entornos diferentes.
