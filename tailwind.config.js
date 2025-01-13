module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {
        colors: {
          primary: '#E40004',
          secondary: '#940000',
          dark: '#3E0707',
          yellow: {
            light: '#FFE7C4',
            DEFAULT: '#FFB930',
          },
          blue: {
            light: '#64B5F6',
            DEFAULT: '#297BBF',
          },
          green: '#2ECB71',
        },
        fontFamily: {
          inter: ['Inter', 'sans-serif'],
        },
      },
    },
    plugins: [],
  }