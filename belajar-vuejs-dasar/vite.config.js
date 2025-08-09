import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'

// https://vite.dev/config/
export default defineConfig({
  plugins: [vue()],
  build: {
    rollupOptions: {
      input: {
        index: 'index.html',
        hello: 'html/hello.html',
        latihan: 'html/latihan.html',
        counter: 'html/counter.html'
      }
    }
  }
})
