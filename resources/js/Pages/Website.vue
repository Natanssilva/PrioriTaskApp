<script setup>
import Navbar from "../components/Website/Navbar.vue";
import Footer from "../components/Website/Footer.vue";
</script>

<template>
    <Navbar />

    <!-- Home -->
    <div
        id="home"
        class="hero min-h-screen"
        style="background-image: url(../public/images/hero-section.jpg)"
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
                
                <button class="btn">
                    Comece agora
                    <img src="/public/images/arrow_right.svg" alt="">
                </button>
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
                            class="text-base font-semibold leading-7 text-indigo-600"
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
                            gerenciamento de investimentos. Desde sugestões de
                            portfólio até análises de desempenho, nosso sistema
                            fornece as ferramentas necessárias para otimizar
                            suas escolhas de investimento e alcançar seus
                            objetivos financeiros.
                        </p>
                        <dl
                            class="mt-10 max-w-xl space-y-8 text-base leading-7 text-gray-600 lg:max-w-none"
                        >
                            <div class="relative pl-9">
                                <dt class="inline font-semibold text-gray-900">
                                    <svg
                                        class="absolute left-1 top-1 h-5 w-5 text-indigo-600"
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
                                    suas finanças. Acompanhe suas receitas,
                                    despesas e investimentos em tempo real, tudo
                                    em um só lugar.
                                </dd>
                            </div>
                            <div class="relative pl-9">
                                <dt class="inline font-semibold text-gray-900">
                                    <svg
                                        class="absolute left-1 top-1 h-5 w-5 text-indigo-600"
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
                                    Orçamento Pessoal Inteligente:
                                </dt>
                                <dd class="inline">
                                    Aperfeiçoe seu controle financeiro com nosso
                                    sistema de orçamento inteligente. Estabeleça
                                    metas, acompanhe despesas e receitas, e
                                    receba insights personalizados para otimizar
                                    seus gastos e economizar.
                                </dd>
                            </div>
                            <div class="relative pl-9">
                                <dt class="inline font-semibold text-gray-900">
                                    <svg
                                        class="absolute left-1 top-1 h-5 w-5 text-indigo-600"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                        aria-hidden="true"
                                    >
                                        <path
                                            d="M4.632 3.533A2 2 0 016.577 2h6.846a2 2 0 011.945 1.533l1.976 8.234A3.489 3.489 0 0016 11.5H4c-.476 0-.93.095-1.344.267l1.976-8.234z"
                                        />
                                        <path
                                            fill-rule="evenodd"
                                            d="M4 13a2 2 0 100 4h12a2 2 0 100-4H4zm11.24 2a.75.75 0 01.75-.75H16a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75h-.01a.75.75 0 01-.75-.75V15zm-2.25-.75a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75H13a.75.75 0 00.75-.75V15a.75.75 0 00-.75-.75h-.01z"
                                            clip-rule="evenodd"
                                        />
                                    </svg>
                                    Análise de Despesas Detalhada:
                                </dt>
                                <dd class="inline">
                                    Ganhe insights profundos sobre seus padrões
                                    de gastos. Analise categorias específicas,
                                    identifique áreas para economia e tome
                                    medidas para otimizar seu orçamento mensal.
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>
                <img
                    id="imagem-services"
                    src="../prioriTask-website/images/finance.jpg"
                    alt="Product screenshot"
                    class="w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[50rem] md:-ml-4 lg:-ml-4 mt-4"
                />
            </div>
        </div>
    </div>

    <!-- Funcionalidades -->
    <div
        id="features"
        class="flex flex-wrap justify-between bg-white py-24 sm:py-32"
    >
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div
                id="funcionalidades-title"
                class="mx-auto max-w-2xl lg:text-center"
            >
                <h2 class="text-base font-semibold leading-7 text-indigo-600">
                    Disponível em Mobile
                </h2>
                <p
                    class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"
                >
                    Tudo que você precisa em apenas um Aplicativo
                </p>
                <p class="mt-6 text-lg leading-8 text-gray-600">
                    O melhor aplicativo financeiro desenvolvido tanto para
                    usuários Web e para Mobile,com ênfase no melhor
                    gerenciamento para cada usuário.
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
                                class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600"
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
                            Notificações de Contas e Vencimentos
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">
                            Receba alertas automáticos para contas a pagar,
                            vencimentos de cartões de crédito e outras
                            obrigações financeiras, ajudando a evitar atrasos e
                            multas.
                        </dd>
                    </div>
                    <div class="relative pl-16">
                        <dt
                            class="text-base font-semibold leading-7 text-gray-900"
                        >
                            <div
                                class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600"
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
                            criptografia Hash e são armazenados com segurança em
                            uma base de dados em um serviço de Cloud.
                        </dd>
                    </div>
                    <div class="relative pl-16">
                        <dt
                            class="text-base font-semibold leading-7 text-gray-900"
                        >
                            <div
                                class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600"
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
                            dados para diversos formatos, facilitando auditorias
                            e análises mais profundas.
                        </dd>
                    </div>
                    <div class="relative pl-16">
                        <dt
                            class="text-base font-semibold leading-7 text-gray-900"
                        >
                            <div
                                class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600"
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
                            problemas e garantir uma experiência financeira
                            tranquila.
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
        <div class="mockup-phone border-primary mt-10">
            <div class="camera"></div>
            <div class="display">
                <div class="artboard artboard-demo phone-1">
                    <img
                        src="../prioriTask-website/images/hero-prime.jpg"
                        alt=""
                        class="w-full h-full object-cover"
                    />
                </div>
            </div>
        </div>
    </div>

    <!-- Planos -->

    <div id="princing" class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl sm:text-center">
                <h2
                    class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"
                >
                    Plano Premium
                </h2>
                <p class="mt-6 text-lg leading-8 text-gray-600">
                    Desbloqueie o Poder Total das Suas Finanças,
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
                        está prestes a transformar sua jornada financeira.
                        Desfrute de uma gestão de dinheiro simplificada,
                        análises detalhadas e suporte premium para atingir suas
                        metas financeiras com facilidade.
                    </p>
                    <div class="mt-10 flex items-center gap-x-4">
                        <h4
                            class="flex-none text-sm font-semibold leading-6 text-indigo-600"
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
                                class="h-6 w-5 flex-none text-indigo-600"
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
                                class="h-6 w-5 flex-none text-indigo-600"
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
                                class="h-6 w-5 flex-none text-indigo-600"
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
                                class="h-6 w-5 flex-none text-indigo-600"
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
                            <a
                                href="#"
                                class="mt-10 block w-full rounded-md bg-gray-800 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-violet-600 hover:border-white hover:text-white active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300"
                                >Adquirir assinatura</a
                            >
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

    <div id="about" class="hero min-h-screen bg-base-300">
        <div
            class="hero-content flex-col lg:flex-row items-center justify-between"
        >
            <img
                src="../prioriTask-website/images/perfil-pic.jpg"
                class="w-80 h-80 object-cover rounded-full shadow-2xl"
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
                        class="btn btn-accent-content border-white hover:bg-violet-600 hover:text-white hover:border-white active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300 transform hover:scale-110 transition-all duration-300"
                        >Me acompanhe no Linkedin</a
                    >
                </div>
            </div>
        </div>
    </div>

    <Footer />
</template>
