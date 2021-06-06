<?php

class Form
{
	public $action; // merujuk pada lokasi file action form

	public $method; // mendefinisikan method form (GET/POST)

	public $submit;
	
	public $buttonText; // untuk tulisan pada tombol submit

	public $field = 0; // untuk menghitung jumlah field yang telah dibuat

	public $fields = []; // untuk menyimpan data-data field

	// Deklarasi contructor class Form
    public function __construct($action, $button, $method = "POST", $submit = "submit")
	{
		$this->action = $action;
		$this->buttonText = $button;
		$this->method = $method;
		$this->submit = $submit;
	}

	// Deklarasi function add_field
	public function addField($label, $name, $type, $value = array(null), $valueLabel = array(null))
	{
		$this-> fields[$this-> field]['label'] = $label;
		$this-> fields[$this-> field]['name'] = $name;
		$this-> fields[$this-> field]['type'] = $type;
		if (isset($value)) {
			$this-> fields[$this-> field]['value'] = $value;
		}
		if ($type == "select" || $type == "radio" || $type == "checkbox") {
			$this-> fields[$this-> field]['value'] = $value;
			$this-> fields[$this-> field]['valueLabel'] = $valueLabel;
		}
		$this-> field++;
	}

	public function getFieldNumber()
	{
		return $this -> field;
	}

	public function cetakForm()
	{
		?>
		<form action="<?= $this -> action; ?>" method="<?= $this -> method; ?>" enctype="multipart/form-data">
            <!-- Memulai perulangan field -->
            <?php for ($i = 0; $i < $this -> field; $i++): ?>
            <!-- 
                Select
             -->
            <?php if($this -> fields[$i]['type'] == "select"): ?>
            <div class="form-group mb-4">
                <!-- Label -->
                <label for="<?= $this -> fields[$i]['name']; ?>" class="form-label fw-bold">
                    <?= $this -> fields[$i]['label']; ?>
                </label>
                <!-- Select n Option -->
                <select class="form-select text-secondary fw-bold" name="<?= $this -> fields[$i]['name']; ?>"
                    required>
                    <!-- Perulangan -->
                    <?php for($j = 0; $j < count($this -> fields[$i]['value']); $j++): ?>
                    <!-- Option -->
                    <option value="<?= $this -> fields[$i]['value'][$j]; ?>">
                        <!-- Option Label -->
                        <?= $this -> fields[$i]['valueLabel'][$j]; ?>
                    </option>
                    <?php endfor; ?>
                </select>
            </div>
            <!-- 
                Checkbox && Radio
             -->
            <?php elseif($this -> fields[$i]['type'] == "checkbox" || $this -> fields[$i]['type'] == "radio" ): ?>
            <label for="<?= $this -> fields[$i]['name']; ?>" class="form-label fw-bold">
                <?= $this -> fields[$i]['label']; ?>
            </label>
            <div class="form-group fw-bold mb-4 text-secondary">
                <?php for($j = 0; $j < count($this -> fields[$i]['value']); $j++): ?>
                <div class="form-check form-check-inline">
                    <input type="<?= $this -> fields[$i]['type']; ?>"
                        name="<?= $this -> fields[$i]['name']; ?>" class="form-check-input"
                        value="<?= $this -> fields[$i]['value'][$j]; ?>">
                    <!-- Choice Label -->
                    <label class="form-check-label" for="<?= $this -> fields[$i]['value'][$j]; ?>">
                        <?= $this -> fields[$i]['valueLabel'][$j]; ?>
                    </label>
                </div>
                <?php endfor; ?>
            </div>
            <!-- 
                Textarea
             -->
            <?php elseif($this -> fields[$i]['type'] == "textarea"): ?>
            <div class="form-group mb-4">
                <label for="<?= $this -> fields[$i]['name']; ?>" class="form-label fw-bold">
                    <?= $this -> fields[$i]['label']; ?>
                </label>
                <textarea name="<?= $this -> fields[$i]['name']; ?>" class="form-control shadow-none text-secondary fw-bold"><?php if(isset($this -> fields[$i]['value'])): ?><?= $this -> fields[$i]['value'][0]; ?><?php endif; ?></textarea>
            </div>
            <!-- 
                Hidden
             -->
            <?php elseif($this -> fields[$i]['type'] == "hidden"): ?>
            <input type="<?= $this -> fields[$i]['type']; ?>" name="<?= $this -> fields[$i]['name']; ?>"
                value="<?= $this -> fields[$i]['value'][0]; ?>" required>
            <!-- 
                Selain di atas :)
             -->
            <?php else: ?>
            <div class="form-group mb-4">
                <label for="<?= $this -> fields[$i]['name']; ?>"
                    class="form-label fw-bold"><?= $this -> fields[$i]['label']; ?></label>
                <input type="<?= $this -> fields[$i]['type']; ?>" name="<?= $this -> fields[$i]['name']; ?>" class="form-control shadow-none text-secondary fw-bold" <?php if(isset($this -> fields[$i]['value'])) echo 'value="' . $this -> fields[$i]['value'][0] . '"'; ?> required>
            </div>
            <?php endif; ?>
            <?php endfor; ?>
            <!-- Submit button -->
            <div class="form-group">
                <button class="btn btn-primary fw-bold" type="submit" name="<?= $this -> submit; ?>">
                    <?= $this -> buttonText; ?>
                </button>
            </div>
        </form>
		<?php
	}
}