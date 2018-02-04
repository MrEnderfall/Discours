<?php
ob_start();
?>
<style type="text/css">
p
{
  margin-bottom:1em;
}
</style>

<content>
  <h2>Чем Дискурс отличается от большинства параш?</h2>
  <p>
  У Дискурса есть <a href="/principles" target="_blank">принципы</a>. Хорошие, плохие — не важно. Они есть.
  Принципы помогают определить основные направления развития и конкретизировать задачи разработки,
  а также дают хоть какие-то гарантии, что Дискурс в итоге не окажется тем, чем он не должен был быть изначально.
  </p>

  <p>
  Мы стараемся сделать максимально удобный анонимный форум, отвечающий стандартам 2018 года.
  Все знают, что борды мертвы, а значит нужно искать новые пути развития русскоязычного анонимного сообщества.
  </p>

  <h2>Что можно и что нельзя постить?</h2>
  <p>
  На Дискурсе нет модераторского произвола, и все действия модераторов записываются в
  <a href="/modlog" target="_blank">модлог</a> для того, чтобы можно было пресекать случаи злоупотребления.
  Тем не менее, отсутствие мочерации не означает, что можно безнаказанно постить что угодно.
  </p>
  
  <p>
  Есть три основных категории контента, которые здесь, мягко говоря, не приветствуются:
  </p>

  <p>
  <ol style="font-weight:bold;list-style-position:inside;">
    <li>Порно, гуро и прочий explicit content</li>
    <li>Спам</li>
    <li>Вайпы</li>
  </ol>
  </p>
  
  <p>
  Почему? В двух словах: чтобы у Дискурса была перспектива. Гораздо сложнее развивать проект, который представляет из себя
  помойку для слива порно-картинок.
  </p>

  Аватаркофажество и неймфажество разрешено, но не стоит испытывать наше терпение.
  
  <h2>Как можно связаться с администрацией Дискурса?</h2>
  См. раздел <a href="/contact">«контакты»</a>.
  
  <h2>Как можно помочь Дискурсу?</h2>
  <div style="text-align:justify;">
  Помимо создания оригинального контента и поддержания активного общения, вы можете дописать
  статьи про Дискурс на <a href="https://wiki.1chan.ca/Discou.rs" target="_blank">Колчевики</a> или <a href="https://wiki.otake.tk/wiki/Дрискурс" target="_blank">Упячковики</a>,
  а также принять активное участие
  в разработке <a href="https://github.com/DiscoursProject/Discours" target="_blank">движка</a>.
  </div>

  <h2>Если я буду обзывать людей ньюфагами, меня забанят?</h2>
  <div style="text-align:justify;">
  Нет, убеждение, что на Дискурсе банят по любому поводу, не соответствует действительности.
  У нас есть четкие <a href="/about">правила</a> для модераторов, и все их действия отображаются в <a href="/about">модлоге</a>.
  Любой может проверить их легитимность и, в случае выявления несоответствий, <a href="/d/">написать жалобу</a>.
  </div>
  
</content>
<?php
$html = ob_get_contents();
ob_end_clean();

$twig_data = array
(
  "html" => $html
);

echo render($twig_data);
?>