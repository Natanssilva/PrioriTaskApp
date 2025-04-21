<template>
    <div class="navbar bg-[#60AFFC] shadow-sm fixed z-50">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="lg:hidden pr-6">
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
                            d="M4 6h16M4 12h8m-8 6h16"
                        />
                    </svg>
                </div>
                <ul
                    tabindex="0"
                    class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow"
                >
                    <li>
                        <a href="#home">Home</a>
                    </li>
                    <li>
                        <a>Produto</a>
                        <ul class="p-2">
                            <li>
                                <a href="#services">Serviços</a>
                            </li>
                            <li>
                                <a href="#funcionalidades">Funcionalidades</a>
                            </li>
                            <li>
                                <a href="#planos">Planos</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#sobre">Sobre</a>
                    </li>
                </ul>
            </div>
            <a class="text-xl">PrioriTask</a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                <li>
                    <a href="#home">Home</a>
                </li>
                <li>
                    <details>
                        <summary>Produto</summary>
                        <ul class="p-2">
                            <li>
                                <a href="#services">Serviços</a>
                            </li>
                            <li>
                                <a href="#funcionalidades">Funcionalidades</a>
                            </li>
                            <li>
                                <a href="#planos">Planos</a>
                            </li>
                        </ul>
                    </details>
                </li>
                <li>
                    <a href="#sobre">Sobre</a>
                </li>
            </ul>
        </div>
    </div>
</template>
