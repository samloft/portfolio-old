<template>
    <div
        :class="isOpen ? 'absolute top-0 transition transform origin-top-right md:hidden h-full w-full z-50 pt-3' : ''">
        <div class="bg-dark shadow-b-xs overflow-hidden h-full w-full">
            <div class="px-5 pt-4 flex items-center justify-between mb-5">
                <div>
                    <a href="/">
                        <img class="h-8 w-auto" src="/images/logo.png"
                             alt="devloft"/>
                    </a>
                </div>

                <div v-if="isOpen" @click="isOpen = false">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="z-50 relative" width="32"
                         height="32" fill="none">
                        <path d="M6 18L18 6M6 6L18 18" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                    </svg>
                </div>

                <div v-else @click="isOpen = true">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                         class="fill-current text-white h-8 w-8">
                        <path
                            d="M16.4 9H3.6c-.552 0-.6.447-.6 1 0 .553.048 1 .6 1h12.8c.552 0 .6-.447.6-1 0-.553-.048-1-.6-1zm0 4H3.6c-.552 0-.6.447-.6 1 0 .553.048 1 .6 1h12.8c.552 0 .6-.447.6-1 0-.553-.048-1-.6-1zM3.6 7h12.8c.552 0 .6-.447.6-1 0-.553-.048-1-.6-1H3.6c-.552 0-.6.447-.6 1 0 .553.048 1 .6 1z"></path>
                    </svg>
                </div>
            </div>

            <div :class="isOpen ? '' : 'hidden'">
                <slot name="menu" isOpen="isOpen"></slot>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                isOpen: false,
            }
        }
    }
</script>
