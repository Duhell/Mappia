/** @type {import('tailwindcss').Config} */
export default  {
    content: ["./resources/**/*.blade.php","./app/Livewire/*.php"],
    theme: {
      extend: {},
    },
    plugins: [require("daisyui")],
    daisyui:{
        darkTheme: "light",
    }
}
