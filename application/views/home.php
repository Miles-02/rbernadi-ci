<?php $this->load->view('header'); ?>
    <div class="row">
        <div class="EmpresasClientes col-md-3" style="font-size: 14px;">
            <div> <h5> <b> Clientes satisfeitos</b> <br> </h5> </div>
            Nome da Empresa 1</br>
            Nome da Empresa 2</br>
            Nome da Empresa 3</br>
            Nome da Empresa 4</br>
            Nome da Empresa 5</br>
            Nome da Empresa 6</br>
            Nome da Empresa 7</br>
            <a class="btn btn-info" style="margin-top: 1%;" href="<?=base_url('contato');?>">Ver Todos &raquo;</a>
        </div>

        <div class="EmpresaTrabalho col-md-8">
            <div class="Nome"> <h4> <b> Clientes satisfeitos</b> <br> </h4> </div>
            <img width="600px" height="300px" src="<?= base_url('assets/Imgs/CaixaFerramentas.jpg') ?>">
            <article style="text-align: justify; width: 60%"">
                <p>Ao contrário do que se acredita, Lorem Ipsum não é simplesmente um texto randômico. 
                Com mais de 2000 anos, suas raízes podem ser encontradas em uma obra de literatura latina
                clássica datada de 45 AC.</p>
            </article>
            <a class="btn btn-info" href="<?=base_url('clientes'); ?>">Ver outros Trabalhos &raquo;</a>
        </div>
    </div>
    
    <div class="row">
        <div class="AjudaSite col-md-5" style="margin-top: 2%; font-size: 13px; ">
            <h4> <b> Como um site pode sua empresa ?</b> </h4>
            <p>Ao contrário do que se acredita, Lorem Ipsum não é simplesmente um 
            texto randômico. Com mais de 2000 anos, suas raízes podem ser 
            encontradas . </p>
            <p>Ao contrário do que se acredita, Lorem Ipsum não é simplesmente um 
            texto randômico. Com mais de 2000 anos, suas raízes podem ser 
            encontradas . </p>
            <p>Ao contrário do que se acredita, Lorem Ipsum não é simplesmente um 
            texto randômico. Com mais de 2000 anos, suas raízes podem ser 
            encontradas . </p>
        </div> 
        <?php $this->load->view('noticias'); ?>
    </div>

<?php $this->load->view('footer'); ?>