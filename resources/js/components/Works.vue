<template>
    <div>
        <div class="mt-6 grid grid-cols-2 gap-4 lg:mt-8">
            <div v-for="work in works" class="col-span-1 flex justify-center browser">
                <div class="window relative">
                    <div class="titlebar">
                        <div class="buttons">
                            <div class="close"></div>
                            <div class="minimize"></div>
                            <div class="zoom"></div>
                        </div>

                        {{ work.title }}
                    </div>
                    <div class="content">
                        <div class="overlay"></div>

                        <img class="w-full h-auto" :alt="work.title"
                             src="https://www.formget.com/wp-content/uploads/2019/12/LinkPeek-Website-Screenshot-API.png">

                        <div class="text">
                            <span class="block mb-5 text-lg">{{ work.title }}</span>

                            <button @click="modal = true"
                                    class="py-2 px-4 border rounded border-white hover:text-black hover:bg-white shadow">
                                View 👨‍💻
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <transition name="bounce">
            <div v-if="modal" class="modal fixed bottom-0 inset-x-0 w-full h-full bg-light p-32">
                <div class="flex justify-between">
                    <h1 class="text-4xl font-bold tracking-tighter">Project title here....</h1>

                    <button @click="modal = false" class="hover:text-gray-300">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 18L18 6M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
            </div>
        </transition>
    </div>
</template>

<style>
    .bounce-enter-active {
        animation: bounce-in .5s;
    }

    .bounce-leave-active {
        animation: bounce-in .5s reverse;
    }

    @keyframes bounce-in {
        0% {
            transform: scale(0);
        }
        50% {
            transform: scale(1.5);
        }
        100% {
            transform: scale(1);
        }
    }
</style>

<script>
    export default {
        data() {
            return {
                modal: false,
                works: [
                    {title: 'Project number one'},
                    {title: 'Project number two'},
                    {title: 'Project number three'},
                ]
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
