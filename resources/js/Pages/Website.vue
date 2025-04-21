<script setup>
import Navbar from "../components/Website/Navbar.vue";
import Footer from "../components/Website/Footer.vue";
</script>

<template>
    <Navbar />

    <!-- Home -->
    <div
        id="home"
        class="hero min-h-screen bg-[url(/public/images/hero-section.jpg)]"
    >
        <div class="hero-overlay"></div>
        <div class="hero-content text-neutral-content text-center">
            <div class="max-w-md">
                <h1 class="mb-5 text-5xl font-bold">
                    Organize seu tempo, alcance seus objetivos
                </h1>
                <p class="mb-5">
                    Com o PrioriTask, você tem muito mais que uma simples lista
                    de tarefas. Nossa plataforma combina técnicas de
                    produtividade como o método Pomodoro, organização por
                    prioridades e painéis de progresso para te ajudar a focar no
                    que realmente importa. Torne seus dias mais leves,
                    organizados e produtivos.
                </p>

                <div class="flex justify-around items-center">
                    <a href="/login">
                        <button
                            class="btn bg-[#60AFFC] border-[#60AFFC] shadow-none"
                        >
                            Acesse a plataforma web
                            <img src="/public/images/arrow_right.svg" alt="" />
                        </button>
                    </a>
                    <button
                        class="btn bg-[#60AFFC] border-[#60AFFC] shadow-none"
                    >
                        Baixar App
                        <img src="/public/images/download.svg" alt="" />
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Serviços -->

    <div id="services" class="overflow-hidden bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div
                class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2"
            >
                <div class="lg:pr-8 lg:pt-4">
                    <div id="text-services" class="lg:max-w-lg">
                        <h2
                            class="text-base font-semibold leading-7 text-[#60AFFC]"
                        >
                            Organização simples e fácil
                        </h2>
                        <p
                            class="mt-2 text-3xl font-bold tracking-tight text-gray-800 sm:text-4xl"
                        >
                            Gerenciador de tarefas
                        </p>
                        <p class="mt-6 text-lg leading-8 text-gray-600">
                            Oferecemos uma abordagem personalizada para o
                            gerenciamento de tarefas. Nosso sistema fornece as
                            ferramentas necessárias para otimizar suas escolhas
                            do dia a dia e alinhar a organização com os objetos
                            individuais.
                        </p>
                        <dl
                            class="mt-10 max-w-xl space-y-8 text-base leading-7 text-gray-600 lg:max-w-none"
                        >
                            <div class="relative pl-9">
                                <dt class="inline font-semibold text-gray-900">
                                    <svg
                                        class="absolute left-1 top-1 h-5 w-5 text-[#60AFFC]"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                        aria-hidden="true"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M5.5 17a4.5 4.5 0 01-1.44-8.765 4.5 4.5 0 018.302-3.046 3.5 3.5 0 014.504 4.272A4 4 0 0115 17H5.5zm3.75-2.75a.75.75 0 001.5 0V9.66l1.95 2.1a.75.75 0 101.1-1.02l-3.25-3.5a.75.75 0 00-1.1 0l-3.25 3.5a.75.75 0 101.1 1.02l1.95-2.1v4.59z"
                                            clip-rule="evenodd"
                                        />
                                    </svg>
                                    Dashboards Intuitivos:
                                </dt>
                                <dd class="inline">
                                    Desfrute de dashboards intuitivos e
                                    visualizações gráficas que proporcionam uma
                                    visão abrangente e fácil de entender das
                                    suas tarefas do dia a dia. Acompanhe suas
                                    tarefas, filtre e visualize pelo período que
                                    desejar.
                                </dd>
                            </div>
                            <div class="relative pl-9">
                                <dt class="inline font-semibold text-gray-900">
                                    <svg
                                        class="absolute left-1 top-1 h-5 w-5 text-[#60AFFC]"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                        aria-hidden="true"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z"
                                            clip-rule="evenodd"
                                        />
                                    </svg>
                                    Métodos de concentração:
                                </dt>
                                <dd class="inline">
                                    Aperfeiçoe suas tarefas utilizando métodos
                                    para potencializar sua produtividade,cada
                                    tarefa pode ser acoplada a um método, como
                                    por exemplo pomodoro, flowtime e time
                                    blocking.
                                </dd>
                            </div>
                            <div class="relative pl-9">
                                <dt class="inline font-semibold text-gray-900">
                                    <img
                                        class="absolute left-1 top-1 h-5 w-5"
                                        src="/public/images/pdf.svg"
                                        alt=""
                                    />

                                    Relatórios de desempenho:
                                </dt>
                                <dd class="inline">
                                    Exporte relatórios PDFs com métricas de
                                    desempenho semanal e mensal para
                                    acompanhamento da produtividade.
                                </dd>
                            </div>

                            <div class="relative pl-9">
                                <dt class="inline font-semibold text-gray-900">
                                    <img
                                        class="absolute left-1 top-1 h-5 w-5"
                                        src="/public/images/voice.svg"
                                        alt=""
                                    />

                                    Integração por voz:
                                </dt>
                                <dd class="inline">
                                    Crie tarefas de forma prática, sem
                                    necessidade de digitar, apenas utilizando a
                                    voz.
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>
                <img
                    id="imagem-services"
                    src="/public/images/home-prioritask.png"
                    alt="Product screenshot"
                    class="w-full max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[50rem] md:-ml-4 lg:-ml-4 mt-4"
                />
            </div>
        </div>
    </div>

    <!-- Funcionalidades -->
    <div
        id="funcionalidades"
        class="flex flex-wrap justify-between bg-white py-24 sm:py-32"
    >
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div
                id="funcionalidades-title"
                class="mx-auto max-w-2xl lg:text-center"
            >
                <h2 class="text-base font-semibold leading-7 text-[#60AFFC]">
                    Disponível em Mobile
                </h2>
                <p
                    class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"
                >
                    Tudo que você precisa em apenas um Aplicativo
                </p>
                <p class="mt-6 text-lg leading-8 text-gray-600">
                    O melhor aplicativo de gerenciamento pessoal desenvolvido
                    tanto para usuários Web e para Mobile,com ênfase no melhor
                    perfil para cada usuário.
                </p>
            </div>
            <div
                id="funcionalidades-p"
                class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl"
            >
                <dl
                    class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16"
                >
                    <div class="relative pl-16">
                        <dt
                            class="text-base font-semibold leading-7 text-gray-900"
                        >
                            <div
                                class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-[#60AFFC]"
                            >
                                <svg
                                    class="h-6 w-6 text-white"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    aria-hidden="true"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z"
                                    />
                                </svg>
                            </div>
                            Cloud Computing
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">
                            Dados protegidos e alocados em Cloud Computing para
                            fornecer maior segurança e privacidade no
                            aplicativo.
                        </dd>
                    </div>
                    <div class="relative pl-16">
                        <dt
                            class="text-base font-semibold leading-7 text-gray-900"
                        >
                            <div
                                class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-[#60AFFC]"
                            >
                                <svg
                                    class="h-6 w-6 text-white"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    aria-hidden="true"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"
                                    />
                                </svg>
                            </div>
                            Segurança com Base de Dados
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">
                            Os dados inseridos no app e no site, possuem
                            criptografia e segurança de ponta.
                        </dd>
                    </div>
                    <div class="relative pl-16">
                        <dt
                            class="text-base font-semibold leading-7 text-gray-900"
                        >
                            <div
                                class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-[#60AFFC]"
                            >
                                <svg
                                    class="h-6 w-6 text-white"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    aria-hidden="true"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99"
                                    />
                                </svg>
                            </div>
                            Exportação de Relatórios Personalizados
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">
                            Crie relatórios detalhados personalizados e exporte
                            dados PDF, facilitando auditorias e análises mais
                            profundas da produtividade.
                        </dd>
                    </div>
                    <div class="relative pl-16">
                        <dt
                            class="text-base font-semibold leading-7 text-gray-900"
                        >
                            <div
                                class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-[#60AFFC]"
                            >
                                <svg
                                    class="h-6 w-6 text-white"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    aria-hidden="true"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a7.464 7.464 0 01-1.15 3.993m1.989 3.559A11.209 11.209 0 008.25 10.5a3.75 3.75 0 117.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 01-3.6 9.75m6.633-4.596a18.666 18.666 0 01-2.485 5.33"
                                    />
                                </svg>
                            </div>
                            Suporte ao Cliente 24/7
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">
                            Tenha acesso a suporte ao cliente dedicado a
                            qualquer momento para esclarecer dúvidas, resolver
                            problemas e garantir uma experiência tranquila.
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
        <!-- <div class="mockup-phone border-primary">
            <div class="mockup-phone-camera"></div>
            <div class="mockup-phone-display">
                <img
                    alt="wallpaper"
                    src="https://img.daisyui.com/images/stock/453966.webp"
                />
            </div>
        </div> -->
    </div>

    <!-- Planos -->

    <div id="planos" class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl sm:text-center">
                <h2
                    class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"
                >
                    Plano Premium
                </h2>
                <p class="mt-6 text-lg leading-8 text-gray-600">
                    Desbloqueie a sua produtividade.
                </p>
            </div>
            <div
                class="mx-auto mt-16 max-w-2xl rounded-3xl ring-1 ring-gray-200 sm:mt-20 lg:mx-0 lg:flex lg:max-w-none"
            >
                <div class="p-8 sm:p-10 lg:flex-auto">
                    <h3 class="text-2xl font-bold tracking-tight text-gray-900">
                        O melhor investimento para você
                    </h3>
                    <p class="mt-6 text-base leading-7 text-gray-600">
                        Com recursos exclusivos e ferramentas avançadas, você
                        está prestes a transformar sua jornada pessoal. Desfrute
                        de uma gestão de tarefas simplificada, análises
                        detalhadas e suporte premium para atingir suas metas
                        pessoais de maneira organizada e fácil.
                    </p>
                    <div class="mt-10 flex items-center gap-x-4">
                        <h4
                            class="flex-none text-sm font-semibold leading-6 text-[#60AFFC]"
                        >
                            O que está incluido?
                        </h4>
                        <div class="h-px flex-auto bg-gray-100"></div>
                    </div>
                    <ul
                        role="list"
                        class="mt-8 grid grid-cols-1 gap-4 text-sm leading-6 text-gray-600 sm:grid-cols-2 sm:gap-6"
                    >
                        <li class="flex gap-x-3">
                            <svg
                                class="h-6 w-5 flex-none text-[#60AFFC]"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            Acesso a todas funcionalidades
                        </li>
                        <li class="flex gap-x-3">
                            <svg
                                class="h-6 w-5 flex-none text-[#60AFFC]"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            Acesso a todos serviços
                        </li>
                        <li class="flex gap-x-3">
                            <svg
                                class="h-6 w-5 flex-none text-[#60AFFC]"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            Acesso único a equipe de desenvolvimento com
                            feedbacks de melhoria
                        </li>
                        <li class="flex gap-x-3">
                            <svg
                                class="h-6 w-5 flex-none text-[#60AFFC]"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            Sistema personalizado para o seu perfil
                        </li>
                    </ul>
                </div>
                <div
                    class="-mt-2 p-2 lg:mt-0 lg:w-full lg:max-w-md lg:flex-shrink-0"
                >
                    <div
                        class="rounded-2xl bg-gray-50 py-10 text-center ring-1 ring-inset ring-gray-900/5 lg:flex lg:flex-col lg:justify-center lg:py-16"
                    >
                        <div class="mx-auto max-w-xs px-8">
                            <p class="text-base font-semibold text-gray-600">
                                Pagamento mensal
                            </p>
                            <p
                                class="mt-6 flex items-baseline justify-center gap-x-2"
                            >
                                <span
                                    class="text-5xl font-bold tracking-tight text-gray-900"
                                    >R$15,00</span
                                >
                                <span
                                    class="text-sm font-semibold leading-6 tracking-wide text-gray-600"
                                    >BRL</span
                                >
                            </p>
                            <button
                                class="btn mt-10 bg-[#60AFFC] border-[#60AFFC] shadow-none"
                            >
                                Adquirir assinatura
                                <img src="/public/images/paid.svg" alt="" />
                            </button>
                            <p class="mt-6 text-xs leading-5 text-gray-600">
                                Dados de pagamento seguros conforme padrões
                                atuais.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sobre -->

    <div id="sobre" class="hero min-h-screen bg-slate-50">
        <div
            class="hero-content flex-col lg:flex-row items-center justify-between"
        >
            <img
                src="/public/images/profile.jpg"
                class="w-64 h-64 object-cover rounded-full shadow-2xl"
            />

            <div class="lg:ml-8 flex-1 text-center">
                <!-- Adicionada a classe text-center para centralizar o texto -->
                <h1 class="text-5xl font-bold">Conheça o Desenvolvedor!</h1>
                <p class="py-6">
                    Saudações, me chamo Natan, um desenvolvedor web apaixonado.
                    Estou trabalhando arduamente para trazer até você um sistema
                    de gerenciamento de tarefas e organização incrível. Explore
                    e descubra mais sobre mim e meu trabalho!
                </p>
                <div class="flex justify-center mt-4">
                    <!-- Centralizando o botão -->
                    <a
                        href="https://www.linkedin.com/in/natanssilva/"
                        target="_blank"
                        class="btn bg-[#0967C2] text-white border-[#0059b3]"
                    >
                        <svg
                            aria-label="LinkedIn logo"
                            width="16"
                            height="16"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 32 32"
                        >
                            <path
                                fill="white"
                                d="M26.111,3H5.889c-1.595,0-2.889,1.293-2.889,2.889V26.111c0,1.595,1.293,2.889,2.889,2.889H26.111c1.595,0,2.889-1.293,2.889-2.889V5.889c0-1.595-1.293-2.889-2.889-2.889ZM10.861,25.389h-3.877V12.87h3.877v12.519Zm-1.957-14.158c-1.267,0-2.293-1.034-2.293-2.31s1.026-2.31,2.293-2.31,2.292,1.034,2.292,2.31-1.026,2.31-2.292,2.31Zm16.485,14.158h-3.858v-6.571c0-1.802-.685-2.809-2.111-2.809-1.551,0-2.362,1.048-2.362,2.809v6.571h-3.718V12.87h3.718v1.686s1.118-2.069,3.775-2.069,4.556,1.621,4.556,4.975v7.926Z"
                                fill-rule="evenodd"
                            ></path>
                        </svg>
                        Acompanhe pelo Linkedin
                    </a>
                </div>
            </div>
        </div>
    </div>

    <Footer />
</template>
