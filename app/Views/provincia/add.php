<?=$this->extend("Front/layout/main")?>

<?=$this->section("style")?>
<style>
    .formContent {
        text-align: center;
    }

    .formContent div {
        position: relative;
        display: inline-block;
    }
    .btn-Container {
        text-align: center;        
    }

    .FROM div {
        padding: 10px;
    }
</style>
<?=$this->endSection()?>

<?=$this->section("title")?>Lista<?=$this->endSection()?>

<?=$this->section("content")?>
<br>
<h1 style="font-family: Aharoni;" >AGREGAR PRODUCTO</h1>
<div class="FROM">
<form action="<?=base_url('/Provincia-guardar')?>" method="post" enctype="multipart/form-data" class="form">
    <div class="formContent">
        <div>
            <label style="font-family:Cascadia Mono ;" for="Nombre">NOMBRE</label>
            <input type="text" name="NAME" id="NAME" class="form-control">
        </div>
        <div>
            <label style="font-family:Cascadia Mono ;" for="Nombre">MARCA</label>
            <input type="text" name="CAPITAL" id="CAPITAL" class="form-control">
        </div>
        <div>
            <label style="font-family:Cascadia Mono ;" for="Nombre">DESCRIPCION</label>
            <input type="text" name="DESCRIPTION" id="DESCRIPTION" class="form-control">
        </div>
        <div>
            <label style="font-family:Cascadia Mono ;" for="Nombre">PRECIO</label>
            <input type="text" name="REGION" id="REGION" class="form-control">
        </div>
        <div>
            <label style="font-family:Cascadia Mono ;" for="Nombre">IMAGEN</label>
            <input type="file" name="IMAGE" id="IMAGE" class="form-control">
        </div>
    </div>
    <div class="btn-Container">
        <div>
            <input style="font-family: Aharoni;" type="submit" value="GUARDAR" class="btn btn-info">
        </div>
    </div>
</form>
</div>

<?php if (!empty(session('msg'))) { ?>
    <div class="alert alert-<?=session('msg.type')?>" role="alert">
        <?=session("msg.body")?>
    </div>
<?php } ?>

<?=$this->endSection()?>