import { createRouter, createWebHistory } from 'vue-router'
import Layout from '@/page/layout/index.vue'
import Home from '@/page/home/index.vue'
import Auth from '@/page/auth/index.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: Layout,
      children: [
        {
          path: '/',
          name: '主页',
          component: Home,
        },
      ],
    },
    {
      path: '/login',
      name: '登录',
      component: Auth,
    },
  ],
})

export default router
