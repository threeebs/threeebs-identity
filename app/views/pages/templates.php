<header class="page-heading reveal"><p class="eyebrow">Biblioteca / Templates</p><h1>Interfaces completas, prontas para adaptar.</h1><p>Os templates demonstram como fundamentos e componentes trabalham juntos em situações reais do ecossistema.</p></header>
<section class="template-index reveal">
  <?php foreach ([
    ['admin','Admin','Operação, métricas e gestão','layout'],['portal','Portal','Progresso e área do usuário','home'],['docs','Documentação','Conteúdo técnico e navegação','code'],['community','Comunidade','Discussões e participação','components'],['auth','Autenticação','Entrada e segurança','brand']
  ] as [$slug,$name,$copy,$iconName]): ?>
    <a class="template-card" href="/templates/<?= e($slug) ?>"><div class="template-thumb template-thumb--<?= e($slug) ?>"><span><?= icon($iconName,28) ?></span><i></i><i></i><i></i></div><div><p class="eyebrow">Template</p><h2><?= e($name) ?></h2><p><?= e($copy) ?></p></div><span class="circle-arrow"><?= icon('chevron',19) ?></span></a>
  <?php endforeach; ?>
</section>

