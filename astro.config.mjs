import { defineConfig } from 'astro/config';
import yaml from '@rollup/plugin-yaml';
import sitemap from "@astrojs/sitemap";

// https://astro.build/config
export default defineConfig({
  site: 'https://www.kodular.io',
  integrations: [sitemap()],
  vite: {
    plugins: [yaml()]
  },
  experimental: {
    redirects: true
  },
  redirects: {
    '/account': 'https://account.kodular.io/',
    '/ide': 'https://ide.kodular.io/',
    '/store': 'https://store.kodular.io/',
  }
});
