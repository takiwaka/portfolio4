import { defineConfig } from 'vite'
import legacy from '@vitejs/plugin-legacy'


export default defineConfig({
  server: {
    port: 8083,
    open: '/dist/index.html'
  },

  base: './',

  plugins: [
    legacy({
      targets: ['ie >= 11'],
      additionalLegacyPolyfills: ['regenerator-runtime/runtime']
    })
  ]
})