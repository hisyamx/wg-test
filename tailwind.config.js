const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                'body': ['Inter', 'sans-serif'],
                'mono': ['ui-monospace', 'SFMono-Regular', 'Menlo', 'Monaco', 'Consolas', 'Liberation Mono', 'Courier New', 'monospace']
            },
        },
        colors: {
            gray: colors.coolGray,
            blue: colors.lightBlue,
            red: colors.rose,
            pink: colors.fuchsia,
        },
        extend: {
            spacing: {
                '128': '32rem',
                '144': '36rem',
            },
            borderRadius: {
                '4xl': '2rem',
            }
        },
        boxShadow: {
            custom: '0px 0px 25px rgba(169, 160, 160, 0.2);'
        }
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('@themesberg/flowbite/plugin'),
    ],
    corePlugins: {
        preflight: false,
    },
    variants: {
        extend: {
            boxShadow: ["dark"],
        },
    },
};
