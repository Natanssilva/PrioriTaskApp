<script setup>
import { ref } from 'vue';

const props = defineProps({
    titleCard: String,
    textCard: String,
    buttonText: String,
    isRegister: Boolean,
});

let isVisibility = ref(false); //variavel reativa que pode alterar o valor e mudar o DOM

function setVisibility(){
    isVisibility.value = !isVisibility.value;
}

</script>

<template>
    <div
        class="flex justify-center items-center min-h-screen p-5 bg-[#60AFFC]"
    >
        <!-- card -->
        <div 
            class="bg-white rounded-2xl max-w-md w-full shadow-xl p-12 space-y-4"
        >
            <div class="text-center space-y-2">
                <h1 class="text-3xl font-bold tracking-tighter">
                    {{ titleCard }}
                </h1>
                <p class="text-gray-500">
                    {{ textCard }}
                </p>
            </div>

            <form class="space-y-3">
                <template v-if="isRegister">
                    <div class="space-y-1">
                        <span class="text-gray-500 text-sm">Usuário</span>
                        <label class="input validator">
                            <svg
                                class="h-[1em] opacity-50"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                            >
                                <g
                                    stroke-linejoin="round"
                                    stroke-linecap="round"
                                    stroke-width="2.5"
                                    fill="none"
                                    stroke="currentColor"
                                >
                                    <path
                                        d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"
                                    ></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </g>
                            </svg>
                            <input
                                class="rounded-md"
                                type="input"
                                required
                                name="user"
                                placeholder="Digite o nome do usuário"
                                pattern="[A-Za-z][A-Za-z0-9\-]*"
                                minlength="3"
                                maxlength="30"
                                title="Only letters, numbers or dash"
                            />
                        </label>
                        <!-- <p class="validator-hint">
                            Deve ter de 3 a 30 caracteres
                            <br />
                            contendo apenas letras,números ou hífens
                        </p> -->
                    </div>
                    <div class="space-y-1">
                        <span class="text-gray-500 text-sm">Telefone</span>
                        <label class="input validator">
                            <svg
                                class="h-[1em] opacity-50"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 16 16"
                            >
                                <g fill="none">
                                    <path
                                        d="M7.25 11.5C6.83579 11.5 6.5 11.8358 6.5 12.25C6.5 12.6642 6.83579 13 7.25 13H8.75C9.16421 13 9.5 12.6642 9.5 12.25C9.5 11.8358 9.16421 11.5 8.75 11.5H7.25Z"
                                        fill="currentColor"
                                    ></path>
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M6 1C4.61929 1 3.5 2.11929 3.5 3.5V12.5C3.5 13.8807 4.61929 15 6 15H10C11.3807 15 12.5 13.8807 12.5 12.5V3.5C12.5 2.11929 11.3807 1 10 1H6ZM10 2.5H9.5V3C9.5 3.27614 9.27614 3.5 9 3.5H7C6.72386 3.5 6.5 3.27614 6.5 3V2.5H6C5.44771 2.5 5 2.94772 5 3.5V12.5C5 13.0523 5.44772 13.5 6 13.5H10C10.5523 13.5 11 13.0523 11 12.5V3.5C11 2.94772 10.5523 2.5 10 2.5Z"
                                        fill="currentColor"
                                    ></path>
                                </g>
                            </svg>
                            <input
                                type="tel"
                                class="tabular-nums"
                                required
                                placeholder="Telefone"
                                pattern="[0-9]*"
                                minlength="10"
                                maxlength="10"
                                title="Must be 10 digits"
                            />
                        </label>
                        <!-- <p class="validator-hint">Deve ter 10 dígitos</p> -->
                    </div>
                </template>

                <div class="space-y-1">
                    <span class="text-gray-500 text-sm">Email</span>
                    <label class="input validator">
                        <svg
                            class="h-[1em] opacity-50"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                        >
                            <g
                                stroke-linejoin="round"
                                stroke-linecap="round"
                                stroke-width="2.5"
                                fill="none"
                                stroke="currentColor"
                            >
                                <rect
                                    width="20"
                                    height="16"
                                    x="2"
                                    y="4"
                                    rx="2"
                                ></rect>
                                <path
                                    d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"
                                ></path>
                            </g>
                        </svg>
                        <input
                            type="email"
                            placeholder="email@exemplo.com.br"
                            required
                        />
                    </label>
                    <div class="validator-hint hidden">
                        Entre com um email válido.
                    </div>
                </div>

                <div class="space-y-1 relative">
                    <span class="text-gray-500 text-sm">Senha</span>
                    <label class="input validator">
                        <svg
                            class="h-[1em] opacity-50"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                        >
                            <g
                                stroke-linejoin="round"
                                stroke-linecap="round"
                                stroke-width="2.5"
                                fill="none"
                                stroke="currentColor"
                            >
                                <path
                                    d="M2.586 17.414A2 2 0 0 0 2 18.828V21a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-1a1 1 0 0 1 1-1h1a1 1 0 0 0 1-1v-1a1 1 0 0 1 1-1h.172a2 2 0 0 0 1.414-.586l.814-.814a6.5 6.5 0 1 0-4-4z"
                                ></path>
                                <circle
                                    cx="16.5"
                                    cy="7.5"
                                    r=".5"
                                    fill="currentColor"
                                ></circle>
                            </g>
                        </svg>
                        <div>
                            <input
                                :type="isVisibility ? 'text' : 'password'"
                                required
                                placeholder="***********"
                                minlength="8"
                                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                title="Must be more than 8 characters, including number, lowercase letter, uppercase letter"
                            />
                            <span class="absolute right-0 top-2 mr-2 cursor-pointer">
                                <img :src="isVisibility ? '/images/eye_on.svg' : '/images/eye_off.svg' " alt="eyeIcon" @click="setVisibility()">
                            </span>
                        </div>
                    </label>
                    <!-- <p class="validator-hint hidden">
                        Deve ter mais de 8 caracteres, incluindo 
                            <br />Pelo menos um número   <br />
                        Pelo menos uma letra minúscula <br />Pelo menos uma letra maiúscula
                    </p> -->
                </div>
                <div class="text-left">
                    <span class="text-sm hover:underline text-[#60AFFC]">
                        <a :href="isRegister ? '/login' : '/register'">{{ isRegister ? "Já possui uma conta? Entrar" : "Não possui uma conta? Cadastre-se" }}</a>
                    </span>
                </div>

                <div class="flex justify-center p-2">
                    <button class="btn bg-[#60AFFC] w-full rounded-md">
                        {{ buttonText }}
                    </button>
                </div>
            </form>
            <template v-if="!isRegister">
                <div class="flex w-full flex-col">
                    <div class="divider">ou</div>
                        <button class="btn bg-white text-black border-[#e5e5e5]">
                            <svg aria-label="Google logo" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><g><path d="m0 0H512V512H0" fill="#fff"></path><path fill="#34a853" d="M153 292c30 82 118 95 171 60h62v48A192 192 0 0190 341"></path><path fill="#4285f4" d="m386 400a140 175 0 0053-179H260v74h102q-7 37-38 57"></path><path fill="#fbbc02" d="m90 341a208 200 0 010-171l63 49q-12 37 0 73"></path><path fill="#ea4335" d="m153 219c22-69 116-109 179-50l55-54c-78-75-230-72-297 55"></path></g></svg>
                            Login com Google
                        </button>
                </div>
            </template>
        </div>
    </div>
</template>
