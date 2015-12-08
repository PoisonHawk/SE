<div class="row">
<section id="content">
        <h2>Contacts</h2>
        <div class="separator"></div>
        <article class="col-md-7">

                <h3>Напишите <strong>Нам</strong></h3>
                <form id="contact-form" class="form-horizontal" method="post" >
                    <div class="form-group">
                            <label class="col-md-2 control">Имя:</label>
                            <div class="col-md-7">
                            <input class="form-control"  name="name" value="" onBlur="if(this.value=='') this.value=''" onFocus="if(this.value =='' ) this.value=''" />
                            </div>
                    </div>
                    <div class="form-group">        
                            <label class="col-md-2 control">Email:</label>
                            <div class="col-md-7">
                            <input class="form-control"  name="name1" value="" onBlur="if(this.value=='') this.value=''" onFocus="if(this.value =='' ) this.value=''" />
                            </div>
                    </div>
                    <div class="form-group">   
                            <label class="col-md-2 control">Сообщение:</label>
                            <div class="col-md-7">
                             <textarea class="form-control" rows="3" onBlur="if(this.value=='') this.value=''" onFocus="if(this.value =='' ) this.value=''" name="message"></textarea>
                            </div>
                    </div>
                    <div class="link-form">
                            <a class="link link-margin" href="#" onClick="document.getElementById('contact-form').reset()">Очистить</a>
                            <a class="link" href="#" onClick="document.getElementById('contact-form').submit()">Отправить</a>
                    </div> 
                    <div class="clear"></div>		
                </form>	

        </article>
        <article class="col-md-4">
            <div class="padding-grid-3">
                <h3>Контактная <strong>Информация</strong></h3>
<!--                            <div class="wrapper p2">
                        <figure class="style-img-2 fleft">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2310.453329303802!2d39.75400686264038!3d54.61362253072856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sru!4v1404156162674" width="252" height="200" frameborder="0" style="border:0"></iframe> </figure>
                </div>-->
                <dl class="list-4">
                        
                        <dd>Телефон: <?php echo $phone?></dd>
                        <dd>E-mail: <a class="link" href="#"><?php echo $mail?></a></dd>
                </dl>
            </div>
        </article>	

    
</section>
    </div>