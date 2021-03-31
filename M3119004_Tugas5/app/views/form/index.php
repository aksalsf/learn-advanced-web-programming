<main class="d-md-flex">
    <section class="col-md-6 d-flex align-items-center bg-danger p-md-5 p-3">
        <img src="<?= BASEURL; ?>/img/img-01.png" class="img-fluid">
    </section>
    <section class="col-md-6 p-md-5 p-3">
        <h1 class="text-danger display-3 fw-bold">
            <?= $data['title']; ?>
        </h1>
        <form action="<?= $data['formConstruct']['action']; ?>" method="<?= $data['formConstruct']['method']; ?>"
            class="mt-md-4 mt-3 text-danger">
            <!-- Memulai perulangan field -->
            <?php for ($i = 0; $i < $data['form'] -> field; $i++): ?>
            <!-- 
                Select
             -->
            <?php if($data['form']->fields[$i]['type'] == "select"): ?>
            <div class="form-group mb-4">
                <!-- Label -->
                <label for="<?= $data['form']->fields[$i]['name']; ?>" class="form-label fw-bold">
                    <?= $data['form']->fields[$i]['label']; ?>
                </label>
                <!-- Select n Option -->
                <select class="form-select text-secondary fw-bold" name="<?= $data['form']->fields[$i]['name']; ?>"
                    required>
                    <!-- Perulangan -->
                    <?php for($j = 0; $j < count($data['form']->fields[$i]['value']); $j++): ?>
                    <!-- Option -->
                    <option value="<?= $data['form']->fields[$i]['value'][$j]; ?>">
                        <!-- Option Label -->
                        <?= $data['form']->fields[$i]['valueLabel'][$j]; ?>
                    </option>
                    <?php endfor; ?>
                </select>
            </div>
            <!-- 
                Checkbox && Radio
             -->
            <?php elseif($data['form']->fields[$i]['type'] == "checkbox" || $data['form']->fields[$i]['type'] == "radio" ): ?>
            <label for="<?= $data['form']->fields[$i]['name']; ?>" class="form-label fw-bold">
                <?= $data['form']->fields[$i]['label']; ?>
            </label>
            <div class="form-group fw-bold mb-4 text-secondary">
                <?php for($j = 0; $j < count($data['form']->fields[$i]['value']); $j++): ?>
                <div class="form-check form-check-inline">
                    <input type="<?= $data['form']->fields[$i]['type']; ?>"
                        name="<?= $data['form']->fields[$i]['name']; ?>" class="form-check-input"
                        value="<?= $data['form']->fields[$i]['value'][$j]; ?>">
                    <!-- Choice Label -->
                    <label class="form-check-label" for="<?= $data['form']->fields[$i]['value'][$j]; ?>">
                        <?= $data['form']->fields[$i]['valueLabel'][$j]; ?>
                    </label>
                </div>
                <?php endfor; ?>
            </div>
            <!-- 
                Textarea
             -->
            <?php elseif($data['form']->fields[$i]['type'] == "textarea"): ?>
            <div class="form-group mb-4">
                <label for="<?= $data['form']->fields[$i]['name']; ?>" class="form-label fw-bold">
                    <?= $data['form']->fields[$i]['label']; ?>
                </label>
                <textarea name="<?= $data['form']->fields[$i]['name']; ?>"
                    class="form-control shadow-none text-secondary fw-bold rounded-0 border-top-0 border-start-0 border-end-0 border-warning border-2"></textarea>
            </div>
            <!-- 
                Hidden
             -->
            <?php elseif($data['form']->fields[$i]['type'] == "hidden"): ?>
            <input type="<?= $data['form']->fields[$i]['type']; ?>" name="<?= $data['form']->fields[$i]['name']; ?>"
                value="<?= $data['form']->fields[$i]['value'][0]; ?>" required>
            <!-- 
                Selain di atas :)
             -->
            <?php else: ?>
            <div class="form-group mb-4">
                <label for="<?= $data['form']->fields[$i]['name']; ?>"
                    class="form-label fw-bold"><?= $data['form']->fields[$i]['label']; ?></label>
                <input type="<?= $data['form']->fields[$i]['type']; ?>" name="<?= $data['form']->fields[$i]['name']; ?>"
                    class="form-control shadow-none text-secondary fw-bold rounded-0 border-top-0 border-start-0 border-end-0 border-warning border-2"
                    required>
            </div>
            <?php endif; ?>
            <?php endfor; ?>
            <!-- Submit button -->
            <div class="form-group">
                <a href="<?= BASEURL; ?>/mahasiswa" class="btn btn-outline-secondary fw-bold">[<] Kembali</a>
                <button class="btn btn-danger fw-bold" type="submit" name="<?= $data['formConstruct']['submit']; ?>">
                    <?= $data['formConstruct']['button']; ?>
                </button>
            </div>
        </form>
    </section>
</main>