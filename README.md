# Hostal Lucerito 🏨

Sitio web oficial del **Hostal Lucerito**, un acogedor hospedaje ubicado en la región de Yungas, Bolivia.

## 📋 Descripción

Hostal Lucerito ofrece:
- 🛏️ Habitaciones cómodas (Simple, Doble, Matrimonial, Familiar)
- 🍽️ Restaurante con menú típico yungueño
- 🏊 Piscina y áreas de entretenimiento
- 📍 Ubicación estratégica en Yungas

## 🌳 Estructura del Proyecto

```
beta/
├── index.php                 # Página principal (Alpha)
├── head.php                  # Encabezado y autenticación
├── body.php                  # Contenido principal
├── footer.html               # Pie de página
├── db/                       # Sistema de base de datos
│   ├── db_con.php           # Conexión a BD
│   ├── user.php             # Clase Usuario
│   └── user_session.php     # Gestión de sesiones
├── css/                      # Estilos Bootstrap
├── js/                       # Scripts JavaScript
├── img/                      # Imágenes del sitio
├── v2/                       # Versión Mobirise (No incluida en git)
└── README.md                 # Este archivo
```

## 🔧 Requisitos

- **PHP 7.4+**
- **MySQL/MariaDB**
- **Servidor Apache (XAMPP)**
- **Navegador moderno**

## 🚀 Instalación

1. **Clonar el repositorio**
```bash
git clone https://github.com/tu-usuario/hostal-lucerito.git
cd beta
```

2. **Configurar base de datos**
   - Importar estructura en `db/db_con.php`
   - Actualizar credenciales de conexión

3. **Iniciar servidor**
```bash
# Con XAMPP
# Coloca la carpeta en htdocs/ y accede a:
http://localhost/beta/
```

## 📄 Páginas Principales (v2)

| Página | Descripción |
|--------|------------|
| `index.html` | Inicio con carrusel y servicios |
| `habitacion.html` | Catálogo de habitaciones |
| `Restaurant.html` | Menú del restaurante |
| `Ambiente.html` | Galería de instalaciones |
| `Ubicacion.html` | Mapa y formulario de contacto |

## 🎨 Tecnologías Utilizadas

### Frontend
- **Bootstrap 5.1** - Framework CSS
- **HTML5 / CSS3**
- **JavaScript**

### Backend
- **PHP** - Lógica del servidor
- **MySQL** - Base de datos
- **Formoid** - Procesamiento de formularios

## 👤 Autenticación

Sistema de login integrado:
- Usuario y contraseña
- Sesiones PHP
- Contraseñas hasheadas (MD5)

## 📧 Contacto

**Desarrollado por:** Yersson Fernandez Flores
**Correo:** yersson_9876@hotmail.com

Para reportes de bugs o sugerencias, abre un issue en el repositorio.

## 📝 Licencia

Este proyecto es propiedad de Hostal Lucerito. Todos los derechos reservados.

---