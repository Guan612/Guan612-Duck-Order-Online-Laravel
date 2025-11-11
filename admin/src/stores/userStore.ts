import { defineStore } from 'pinia'
import { ref } from 'vue'

export const useUserStore = defineStore('user', () => {}, {
  persist: true, // 持久化存储
})
