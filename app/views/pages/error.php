<section class="error-page reveal"><span><?= isset($message) && str_contains($title, 'não encontrada') ? '404' : '500' ?></span><p class="eyebrow">Threeebs Identity</p><h1><?= e($title) ?></h1><p><?= e($message ?? 'Algo inesperado aconteceu.') ?></p><a class="button button--primary" href="/">Voltar ao início</a></section>

