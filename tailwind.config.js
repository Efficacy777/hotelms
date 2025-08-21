import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

export default {
  content: [
    './resources/views/**/*.blade.php',
    './resources/js/**/*.js',
    './resources/js/**/*.vue',
    './app/Livewire/**/*.php'
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Inter', ...defaultTheme.fontFamily.sans]
      },
      colors: {
        brand: {
          50: '#eef8ff',
          100: '#d9eeff',
          200: '#b2ddff',
          300: '#85c9ff',
          400: '#3fa7ff',
          500: '#0a84ff',
          600: '#0066d1',
          700: '#004fa1',
          800: '#003b78',
          900: '#00284f'
        }
      }
    }
  },
  plugins: [forms]
};