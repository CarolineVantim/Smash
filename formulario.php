<main>
    <br/>
        <section>
            <a href="dashboard.php">
                <button class="btn btn-success">Voltar</button>
            </a>
        </section>

        <h2 class="mt-3">Produto</h2>

        <form method="post">

            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" value="<?=$obProd->nome?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Descricao</label>
                <input type="text" class="form-control" name="descricao" value="<?=$obProd->descricao?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Marca</label>
                <input type="text" class="form-control" name="marca" value="<?=$obProd->marca?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Quantidade</label>
                <input type="number" class="form-control" name="quantidade" value="<?=$obProd->quantidade?>">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success">Enviar</button>
            </div>
        </form>

</main>