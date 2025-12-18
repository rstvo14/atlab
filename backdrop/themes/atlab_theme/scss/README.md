# SCSS Breakpoints & Utilities Reference

Quick reference guide for using the mobile-first SCSS architecture in your Backdrop theme.

## Breakpoint Variables

Use these semantic breakpoint variables throughout your SCSS:

```scss
$xs-screen: 376px;      // Extra small phones (portrait)
$small-screen: 576px;   // Small devices (landscape phones)
$medium-screen: 768px;  // Medium devices (tablets)
$large-screen: 992px;   // Large devices (desktops)
$xl-screen: 1200px;     // Extra large devices
$xxl-screen: 1400px;    // Extra extra large devices
$xxxl-screen: 1750px;   // Ultra-wide displays
```

## Using Breakpoints (Mobile-First)

### With the `respond-to` Mixin

```scss
// Mobile styles first (default)
.my-component {
  width: 100%;
  padding: 1rem;
  
  // Tablet and up
  @include respond-to($medium-screen) {
    width: 750px;
    padding: 2rem;
  }
  
  // Desktop and up
  @include respond-to($large-screen) {
    width: 970px;
    padding: 3rem;
  }
  
  // Large desktop and up
  @include respond-to($xl-screen) {
    width: 1170px;
  }
}
```

### Direct Media Query (Alternative)

```scss
.my-component {
  // Mobile first
  font-size: 1rem;
  
  @media (min-width: $medium-screen) {
    font-size: 1.125rem;
  }
  
  @media (min-width: $large-screen) {
    font-size: 1.25rem;
  }
}
```

## Layout Utilities

### Container Classes

```scss
// Use as a class or @extend
.my-section {
  @extend %container;  // Combines width + padding
}

// Or separately
.my-other-section {
  @extend %container-width;   // Just responsive max-width
  @extend %container-padding; // Just responsive padding
}
```

### Full-Width Content

Break out of the container to span full viewport:

```scss
.hero-image {
  @include full-width;
  // or
  @extend %full-width-content;
}
```

### Content Column Widths

```scss
.article-content {
  @extend %main-col-width;  // Responsive content column
}

.sidebar {
  @extend %sidebar-width;   // Responsive sidebar
}
```

## Color Variables

```scss
$color-bg-start       // #0a1526 - Background gradient start
$color-bg-end         // #152238 - Background gradient end
$color-text           // #ffffff - Primary text
$color-text-muted     // #cbd5e1 - Muted text
$color-accent         // #dcb161 - Accent/brand color
$color-border         // rgba(255,255,255,0.2) - Border color
```

## Typography Variables

```scss
$font-family-serif    // Georgia, Times New Roman
$font-family-sans     // Inter, system fonts
$font-weight-light    // 300
$font-weight-normal   // 400
$font-weight-semibold // 600
$font-weight-bold     // 700
```

## Spacing Scale

```scss
$spacing-xs   // 0.5rem (8px)
$spacing-sm   // 1rem (16px)
$spacing-md   // 1.5rem (24px)
$spacing-lg   // 2rem (32px)
$spacing-xl   // 3rem (48px)
$spacing-2xl  // 4rem (64px)
```

## File Structure

```
scss/
├── variables/
│   ├── _breakpoints.scss   ← Breakpoint variables
│   ├── _colors.scss        ← Color palette
│   └── _typography.scss    ← Fonts, spacing
├── mixins/
│   └── _responsive.scss    ← Media query mixins
├── base/
│   └── _layout.scss        ← Layout utilities
├── components/
│   ├── _portfolio.scss
│   └── _browser.scss
└── style.scss              ← Main file (imports all)
```

## Example: Creating a Responsive Component

```scss
// components/_my-component.scss

.my-component {
  // Mobile first (320px+)
  display: flex;
  flex-direction: column;
  gap: $spacing-sm;
  padding: $spacing-md;
  background: $color-bg-start;
  
  // Tablets (768px+)
  @include respond-to($medium-screen) {
    flex-direction: row;
    gap: $spacing-lg;
    padding: $spacing-lg;
  }
  
  // Desktops (992px+)
  @include respond-to($large-screen) {
    @extend %container-width;
    gap: $spacing-xl;
  }
  
  // Large desktops (1200px+)
  @include respond-to($xl-screen) {
    padding: $spacing-2xl;
  }
}
```

## Tips

1. **Always start mobile-first**: Write base styles for mobile, then enhance for larger screens
2. **Use semantic breakpoint names**: `$large-screen` is clearer than `992px`
3. **Prefer mixins for consistency**: Use `@include respond-to()` for cleaner code
4. **Extend utilities when possible**: Use `@extend %container` instead of rewriting styles
5. **Keep breakpoints consistent**: Don't create custom breakpoints unless absolutely necessary
