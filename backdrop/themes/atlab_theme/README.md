# Backdrop Starter Theme

A modern, accessible Backdrop CMS theme with mobile-first SCSS architecture and responsive utilities.

## Features

✅ **Mobile-First SCSS Architecture** - Organized, maintainable styles  
✅ **7 Responsive Breakpoints** - From 376px to 1750px  
✅ **Layout Utilities** - Container, full-width, column utilities  
✅ **Semantic Breakpoint Variables** - `$large-screen` instead of `1024px`  
✅ **Responsive Mixins** - Clean `@include respond-to()` syntax  
✅ **Accessible Base** - Skip links, ARIA labels, keyboard navigation  
✅ **Cross-Browser Compatible** - Modern CSS with fallbacks  

## Quick Start

### 1. Set Up DDEV Site

```bash
# Create new DDEV Backdrop project
mkdir my-new-site
cd my-new-site
ddev config --project-type=backdrop --docroot=backdrop
ddev start
```

### 2. Install Backdrop

```bash
# Install Backdrop CMS
ddev exec composer create-project --no-dev backdrop/backdrop backdrop
```

Or download Backdrop manually from [backdropcms.org](https://backdropcms.org/download)

### 3. Install Theme

```bash
# Copy this theme to your Backdrop themes directory
cp -r /path/to/backdrop_starter_theme backdrop/themes/

# Rename theme (optional)
cd backdrop/themes
mv backdrop_starter_theme my_custom_theme

# Update theme name in .info file
# Change "name = Backdrop Starter Theme" to your theme name
```

### 4. Install Dependencies & Compile SCSS

```bash
cd backdrop/themes/my_custom_theme
npm install
npm run sass
```

### 5. Enable Theme

1. Log into your Backdrop site
2. Go to **Admin → Appearance**
3. Enable your theme and set as default

## Theme Structure

```
backdrop_starter_theme/
├── scss/
│   ├── variables/
│   │   ├── _breakpoints.scss   # 7 responsive breakpoints
│   │   ├── _colors.scss        # Color palette
│   │   └── _typography.scss    # Fonts, spacing
│   ├── mixins/
│   │   └── _responsive.scss    # Media query helpers
│   ├── base/
│   │   └── _layout.scss        # Container & layout utilities
│   ├── components/
│   │   ├── _portfolio.scss     # Example component
│   │   └── _browser.scss       # Example component
│   ├── style.scss              # Main import file
│   └── README.md               # SCSS documentation
├── templates/
│   └── layout--default.tpl.php # Default layout template
├── css/
│   └── style.css               # Compiled CSS (auto-generated)
├── js/
│   └── script.js               # Custom JavaScript
├── images/                     # Theme images
├── template.php                # Theme functions
├── backdrop_starter_theme.info # Theme metadata
└── package.json                # NPM dependencies
```

## Customization

### Update Theme Info

Edit `backdrop_starter_theme.info`:

```ini
name = My Custom Theme
description = Custom theme for my project
```

### Customize Colors

Edit `scss/variables/_colors.scss`:

```scss
$color-accent: #your-brand-color;
$color-text: #your-text-color;
```

### Add Custom Components

1. Create new file: `scss/components/_my-component.scss`
2. Import in `scss/style.scss`:
   ```scss
   @import 'components/my-component';
   ```
3. Compile: `npm run sass`

### Use Breakpoints

```scss
.my-element {
  // Mobile first
  font-size: 1rem;
  
  @include respond-to($medium-screen) {
    font-size: 1.125rem;
  }
  
  @include respond-to($large-screen) {
    font-size: 1.25rem;
  }
}
```

## Available Breakpoints

```scss
$xs-screen: 376px;      // Extra small phones
$small-screen: 576px;   // Small devices (landscape)
$medium-screen: 768px;  // Tablets
$large-screen: 992px;   // Desktops
$xl-screen: 1200px;     // Large desktops
$xxl-screen: 1400px;    // Extra large desktops
$xxxl-screen: 1750px;   // Ultra-wide displays
```

## Layout Utilities

```scss
// Use as classes or extend in SCSS
.my-section {
  @extend %container;         // Responsive container
  @extend %full-width-content; // Break out of container
  @extend %main-col-width;     // Content column width
}
```

## Development Workflow

### Watch SCSS for Changes

```bash
npm run watch
```

This will automatically recompile CSS when you save SCSS files.

### One-Time Compilation

```bash
npm run sass
```

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS/Android)

## Credits

Based on the Ensure Access theme architecture with mobile-first responsive design principles.

## License

Use this theme as a starting point for your Backdrop projects. Customize freely!
