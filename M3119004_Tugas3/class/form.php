<?php

class Form
{
	protected $action; // merujuk pada lokasi file action form

	protected $method; // mendefinisikan method form (GET/POST)

	protected $submit; // mendefinisikan name form
	
	protected $buttonText; // untuk tulisan pada tombol submit

	protected $field = 0; // untuk menghitung jumlah field yang telah dibuat

	protected $fields = []; // untuk menyimpan data-data field

	// Deklarasi contructor class Form
	public function __construct($action, $method, $submit, $buttonText = "Submit")
	{
		$this->action = $action;
		$this->method = $method;
		$this->submit = $submit;
		$this->buttonText = $buttonText;
	}

	// Deklarasi function add_field
	public function add_field($label, $name, $type, array $value = array(null), array $valueLabel = array(null))
	{
		$this->fields[$this->field]['label'] = $label;
		$this->fields[$this->field]['name'] = $name;
		$this->fields[$this->field]['type'] = $type;
		if ($type == "select" || $type == "radio" || $type == "checkbox") {
			$this->fields[$this->field]['value'] = $value;
			$this->fields[$this->field]['valueLabel'] = $valueLabel;
		}
		$this->field++;
	}


	public function display_form()
	{ ?>

	<form 	action="<?php echo $this->action; ?>"
			method="<?php echo $this->method; ?>"
			class="mt-md-4 mt-3 text-danger">
		<!-- Memulai perulangan field -->
		<?php for ($fieldIndex = 0; $fieldIndex < $this->field; $fieldIndex++): ?>
			<!-- Cek tipe field -->
			<?php if($this->fields[$fieldIndex]['type'] == "select"): ?>		
				<div class="form-group mb-4">
					<!-- Label -->
					<label for="<?php echo $this->fields[$fieldIndex]['name']; ?>" class="form-label fw-bold">
					<?php echo $this->fields[$fieldIndex]['label']; ?>
					</label>
					<!-- Select n Option -->
					<select class="form-select text-secondary fw-bold" name="<?php echo $this->fields[$fieldIndex]['name']; ?>" required>
						<!-- Perulangan -->
						<?php for($optionIndex = 0; $optionIndex < count($this->fields[$fieldIndex]['value']); $optionIndex++): ?>
						<!-- Option -->
						<option value="<?php echo $this->fields[$fieldIndex]['value'][$optionIndex]; ?>">
							<!-- Option Label -->
							<?php echo $this->fields[$fieldIndex]['valueLabel'][$optionIndex]; ?>
						</option>
						<?php endfor; ?>
					</select>
            	</div>
				<?php elseif($this->fields[$fieldIndex]['type'] == "checkbox" || $this->fields[$fieldIndex]['type'] == "radio" ): ?>
				<label for="<?php echo $this->fields[$fieldIndex]['name']; ?>" class="form-label fw-bold">
					<?php echo $this->fields[$fieldIndex]['label']; ?>
				</label>
				<div class="form-group fw-bold mb-4 text-secondary">
					<?php for($optionIndex = 0; $optionIndex < count($this->fields[$fieldIndex]['value']); $optionIndex++): ?>
					<div class="form-check form-check-inline">
						<input type="<?php echo $this->fields[$fieldIndex]['type']; ?>" name="<?php echo $this->fields[$fieldIndex]['name']; ?>" class="form-check-input" value="<?php echo $this->fields[$fieldIndex]['value'][$optionIndex]; ?>" required>
						<!-- Choice Label -->
						<label class="form-check-label" for="<?php echo $this->fields[$fieldIndex]['value'][$optionIndex]; ?>">
							<?php echo $this->fields[$fieldIndex]['valueLabel'][$optionIndex]; ?>
						</label>
					</div>
					<?php endfor; ?>
				</div>
				<?php elseif($this->fields[$fieldIndex]['type'] == "textarea"): ?>
				<div class="form-group mb-4">
					<label for="<?php echo $this->fields[$fieldIndex]['name']; ?>" class="form-label fw-bold">
						<?php echo $this->fields[$fieldIndex]['label']; ?>
					</label>
					<textarea name="<?php echo $this->fields[$fieldIndex]['name']; ?>" class="form-control shadow-none text-secondary fw-bold rounded-0 border-top-0 border-start-0 border-end-0 border-warning border-2"></textarea>
            	</div>
				<?php else: ?>
				<div class="form-group mb-4">
					<label for="<?php echo $this->fields[$fieldIndex]['name']; ?>" class="form-label fw-bold"><?php echo $this->fields[$fieldIndex]['label']; ?></label>
					<input type="<?php echo $this->fields[$fieldIndex]['type']; ?>" name="<?php echo $this->fields[$fieldIndex]['name']; ?>" class="form-control shadow-none text-secondary fw-bold rounded-0 border-top-0 border-start-0 border-end-0 border-warning border-2" required>
				</div>
			<?php endif; ?>
		<?php endfor; ?>
		<!-- Submit button -->
		<div class="form-group">
			<button class="btn btn-danger fw-bold" type="input" name="<?php echo $this->submit; ?>">
				<?php echo $this->buttonText; ?>
			</button>
		</div>
	</form>

	<?php }
}