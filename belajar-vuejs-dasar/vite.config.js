import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'

// https://vite.dev/config/
export default defineConfig({
  plugins: [vue()],
  builder: {
    rollupOptions: {
      input: {
        index: ['index.html'],
        hello: ['hello.html'],
        latihan: ['latihan-01/latihan.js'],
      }
    }
  }
})
