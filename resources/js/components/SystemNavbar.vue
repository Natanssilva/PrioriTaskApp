<script setup>
import { ref } from "vue";

const menuOptions = ref([
    {
        text: "Home",
        pathImg: "/images/home.svg",
    },
    {
        text: "Tarefas",
        pathImg: "/images/task.svg",
    },
    {
        text: "Dashboard",
        pathImg: "/images/dashboard.svg",
    },
    {
        text: "Relatório",
        pathImg: "/images/docs.svg",
    },
]);
</script>

<template>
    <div class="navbar bg-base-100 shadow-sm p-3">
        <div class="navbar-start">
            <div class="drawer z-10">
                <input id="my-drawer" type="checkbox" class="drawer-toggle" />
                <div class="drawer-content w-5">
                    <label for="my-drawer">
                        <img
                            class="cursor-pointer drawer-button"
                            src="/public/images/menu_open.svg"
                            alt="menu icon"
                        />
                    </label>
                </div>
                <div class="drawer-side">
                    <label
                        for="my-drawer"
                        aria-label="close sidebar"
                        class="drawer-overlay"
                    ></label>
                    <ul
                        class="menu bg-base-200 text-base-content min-h-full w-80 p-4"
                    >
                        <h1 class="p-2 mb-4 font-bold text-lg">PrioriTask</h1>
                        <li class="flex flex-row" v-for="option in menuOptions">
                            <a href="#">
                                <img
                                    :src="option.pathImg"
                                    alt="{{ option.text }} Icon"
                                />
                                {{ option.text }}
                            </a>
                        </li>
                        <footer
                            class="fixed bottom-0 p-2 flex items-center space-x-2"
                        >
                            <img
                                class="w-10 h-10 rounded-full"
                                alt="Foto de perfil"
                                src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp"
                            />
                            <span class="text-md font-bold hover:underline"
                                >Natan Silva</span
                            >
                        </footer>
                    </ul>
                </div>
            </div>
        </div>
        <div class="navbar-center">
            <a class="btn btn-ghost text-xl">PrioriTask</a>
        </div>
        <div class="navbar-end gap-4">
            <div class="dropdown dropdown-end">
                <button
                    tabindex="0"
                    role="button"
                    class="btn btn-ghost btn-circle"
                >
                    <div class="indicator">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"
                            />
                        </svg>
                        <!-- Notification -->
                        <span
                            class="badge badge-xs badge-primary indicator-item"
                            >5</span
                        >
                    </div>
                </button>
                <ul
                    tabindex="0"
                    class="dropdown-content menu bg-base-100 rounded-box z-1 w-52 p-2 shadow-md"
                >
                    <li v-for="i in 5" :key="i">
                        <div
                            class="flex items-center bg-slate-300 p-2 m-2 w-auto rounded"
                        >
                            <!-- Ícone da notificação -->
                            <div class="mr-3">
                                <img
                                    src="/public/images/notifications_drop.svg"
                                    alt="ícone"
                                    class="w-6 h-6"
                                />
                            </div>

                            <!-- Texto da notificação -->
                            <div>
                                <span class="font-bold text-sm text-red-500"
                                    >Notificação nova!</span
                                >
                                <p class="text-left text-xs">Nova coleção é hospedada</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="dropdown dropdown-end">
                <div
                    tabindex="0"
                    role="button"
                    class="btn btn-ghost btn-circle avatar"
                >
                    <div class="w-10 rounded-full">
                        <img
                            alt="Tailwind CSS Navbar component"
                            src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp"
                        />
                    </div>
                </div>
                <ul
                    tabindex="0"
                    class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow"
                >
                    <li>
                        <a class="justify-between">
                            Perfil
                            <span class="badge">Novo</span>
                        </a>
                    </li>
                    <li>
                        <a>Configurações</a>
                    </li>
                    <li>
                        <a
                            >Sair
                            <span class="badge">
                                <img
                                    src="/public/images/logout.svg"
                                    alt="logout_icon"
                                />
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>
