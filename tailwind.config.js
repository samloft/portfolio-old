const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            },

            colors: {
                light: '#354450',
                dark: '#2B3945'
            }
        },
    },
    plugins: [
        require('@tailwindcss/ui'),
    ]
};
