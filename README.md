# Portafolio Profesional - Diana Sofia

Este es un portafolio moderno y responsivo para desarrolladores frontend, construido con **React**, **Tailwind CSS** y **Framer Motion**.

## 🚀 Características

- **Diseño Mobile-First:** Totalmente responsivo para todos los dispositivos.
- **Animaciones Elegantes:** Implementadas con Framer Motion (fade-in, stagger, scroll triggers).
- **Stack Moderno:** React 19, Tailwind CSS 4, Lucide Icons.
- **Gestión de Datos:** Proyectos cargados dinámicamente desde un archivo JSON.
- **Formulario de Contacto:** Con validación básica y estados de envío.
- **SEO Optimizado:** Estructura semántica y metadatos configurados.

## 🛠️ Instalación y Desarrollo

### 1. Instalar dependencias
```bash
npm install
```

### 2. Ejecutar en desarrollo
```bash
npm run dev
```
La aplicación estará disponible en `http://localhost:3000`.

### 3. Construir para producción
```bash
npm run build
```
Los archivos optimizados se generarán en la carpeta `dist/`.

## 🎨 Personalización de Colores

Para cambiar la paleta de colores, edita el archivo `src/index.css` en la sección `@theme`:

```css
@theme {
  --color-primary: #tu-color-hex;
  --color-background: #tu-color-hex;
  --color-surface: #tu-color-hex;
  --color-foreground: #tu-color-hex;
}
```

## 📂 Estructura del Proyecto

- `src/components/`: Componentes UI reutilizables.
- `src/data/`: Archivos de datos (proyectos.json).
- `src/App.tsx`: Punto de entrada y layout principal.
- `src/index.css`: Estilos globales y configuración de Tailwind 4.

## 🚀 Despliegue en GitHub Pages

He configurado el proyecto para que sea fácil de desplegar en GitHub Pages.

### Opción 1: GitHub Actions (Recomendado)

1. Sube tu código a un repositorio de GitHub.
2. Ve a **Settings** > **Pages** en tu repositorio.
3. En **Build and deployment** > **Source**, selecciona **GitHub Actions**.
4. El archivo `.github/workflows/deploy.yml` que he creado se encargará de construir y desplegar tu sitio automáticamente cada vez que hagas un `push` a la rama `main`.

### Opción 2: Despliegue Manual

Si prefieres hacerlo manualmente:

1. Ejecuta `npm run build`.
2. Sube el contenido de la carpeta `dist/` a una rama llamada `gh-pages` o a la carpeta `docs/` en tu rama principal.
3. Configura GitHub Pages para servir desde esa rama/carpeta.

> **Nota:** He configurado `base: './'` en `vite.config.ts` para que los recursos (imágenes, estilos) funcionen correctamente independientemente de si el sitio está en la raíz o en un subdirectorio del dominio.

---
Desarrollado con ❤️ por Diana Sofia.
