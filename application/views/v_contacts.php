<section id="content"><div class="ic">More Website Templates @ TemplateMonster.com. November 21, 2011!</div>
    <div class="main">
        <div class="content-padding-2">
            <div class="container_12">
                <div class="wrapper">
                    <article class="grid_8">
                        <div class="padding-grid-1">
                            <h3>Напишите <strong>Нам</strong></h3>
                            <form id="contact-form" enctype="multipart/form-data" method="post" >
                                <fieldset>
                                        <label>
                                                <span class="name-input">Имя:</span>
                                                <input name="name" value="" onBlur="if(this.value=='') this.value=''" onFocus="if(this.value =='' ) this.value=''" />
                                        </label>
                                        <label>
                                                <span class="name-input">Email:</span>	
                                                <input name="name1" value="" onBlur="if(this.value=='') this.value=''" onFocus="if(this.value =='' ) this.value=''" />
                                        </label>
                                        <label>
                                                <span class="name-input">Сообщение:</span>
                                                <textarea onBlur="if(this.value=='') this.value=''" onFocus="if(this.value =='' ) this.value=''" name="message"></textarea>
                                        </label>						
                                </fieldset>
                                <div class="link-form">
                                        <a class="link link-margin" href="#" onClick="document.getElementById('contact-form').reset()">Очистить</a>
                                        <a class="link" href="#" onClick="document.getElementById('contact-form').submit()">Отправить</a>
                                </div> 
                                <div class="clear"></div>		
                            </form>	
                        </div>
                    </article>
                    <article class="grid_4 alpha">
                        <div class="padding-grid-3">
                            <h3>Контактная <strong>Информация</strong></h3>
<!--                            <div class="wrapper p2">
                                    <figure class="style-img-2 fleft">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2310.453329303802!2d39.75400686264038!3d54.61362253072856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sru!4v1404156162674" width="252" height="200" frameborder="0" style="border:0"></iframe> </figure>
                            </div>-->
                            <dl class="list-4">
                                    <!--<dt>8901 Marmora Road,<br>Glasgow, D04 89GR.</dt>-->
                                    <dd>Телефон: <?php echo $phone?></dd>
                                    <dd>E-mail: <a class="link" href="#"><?php echo $mail?></a></dd>
                            </dl>
                        </div>
                    </article>	
                </div>
            </div>
        </div>
    </div>
    <div class="block"></div>
</section>