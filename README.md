# Portfolio Website

A modern, responsive portfolio website showcasing skills, experience, and projects. Built with HTML, CSS, JavaScript, and PHP.

## Features

- Responsive design that works on all devices
- Modern and clean UI with smooth animations
- Interactive navigation menu
- Contact form with email functionality
- Sections for About, Experience, Projects, and Contact
- Social media integration
- Smooth scrolling navigation
- Intersection Observer for scroll animations

## Setup Instructions

1. Clone this repository to your local machine or web server:
```bash
git clone <repository-url>
```

2. If you're running locally, you'll need a PHP server. You can use PHP's built-in development server:
```bash
cd portfolio-website
php -S localhost:8000
```

3. Configure your email settings in `backend/contact.php`:
   - Update the `$to` variable with your email address
   - Make sure your server's PHP mail configuration is properly set up

4. Open `index.html` in your web browser or visit `http://localhost:8000` if using PHP's development server.

## File Structure

```
portfolio-website/
├── index.html          # Main HTML file
├── css/
│   └── style.css      # Stylesheet
├── js/
│   └── main.js        # JavaScript functionality
├── backend/
│   └── contact.php    # PHP backend for contact form
├── images/            # Directory for images
└── README.md          # This file
```

## Customization

1. Colors and Theme:
   - Edit the CSS variables in `css/style.css` to change the color scheme
   - Modify the fonts by changing the font-family properties

2. Content:
   - Update the content in `index.html` with your personal information
   - Add or remove sections as needed
   - Update project cards with your own projects

3. Images:
   - Replace `hero-bg.jpg` with your own background image
   - Add project screenshots in the images directory

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)

## Dependencies

- Font Awesome 6.0.0 (CDN)
- Inter font family (Google Fonts)

## Contributing

Feel free to submit issues and enhancement requests.

## License

This project is open source and available under the [MIT License](LICENSE). 