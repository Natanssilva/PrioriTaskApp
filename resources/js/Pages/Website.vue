<script setup>
import Navbar from "../components/Website/Navbar.vue";
import Footer from "../components/Website/Footer.vue";
</script>

<template>
    <Navbar />

    <!-- Home -->
    <div
        class="hero min-h-screen"
        style="
            background-image: url(/public/images/hero-section.jpg);
        "
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
                <a href="/login" class="btn">Comece agora mesmo</a>
            </div>
        </div>
    </div>

    <Footer />
</template>
