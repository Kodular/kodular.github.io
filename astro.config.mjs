import { defineConfig } from 'astro/config';
import yaml from '@rollup/plugin-yaml';
import sitemap from "@astrojs/sitemap";

import tailwindcss from '@tailwindcss/vite';

// https://astro.build/config
export default defineConfig({
  site: 'https://www.kodular.io',
  integrations: [sitemap()],
  vite: {
    plugins: [yaml(), tailwindcss()]
  },
});