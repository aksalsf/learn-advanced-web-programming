<?php

class Form
{
	protected $action;

	protected $method;

	protected $submit;

	protected $field = 0;

	protected $fields = [];

	public function __construct($action, $method, $submit)
	{
		$this->action = $action;
		$this->method = $method;
		$this->submit = $submit;
	}

	public function add_field($label, $name, $type, array $optionsValue = array(null), array $optionsLabel = array(null), array $choiceValue = array(null))
	{
		$this->fields[$this->field]['label'] = $label;
		$this->fields[$this->field]['name'] = $name;
		$this->fields[$this->field]['type'] = $type;
		if ($type == "select" || $type == "dropdown") {
			$this->fields[$this->field]['optionsValue'] = $optionsValue;
			$this->fields[$this->field]['optionsLabel'] = $optionsLabel;
		}
		if ($type == "radio" || $type == "checkbox") {
			$this->fields[$this->field]['choiceValue'] = $choiceValue;
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
			<?php if($this->fields[$fieldIndex]['type'] == "text"): ?>		
				<div class="form-group mb-4">
					<label for="<?php echo $this->fields[$fieldIndex]['name']; ?>" class="form-label fw-bold"><?php echo $this->fields[$fieldIndex]['label']; ?></label>
					<input type="<?php echo $this->fields[$fieldIndex]['type']; ?>" name="<?php echo $this->fields[$fieldIndex]['name']; ?>" class="form-control shadow-none text-secondary fw-bold rounded-0 border-top-0 border-start-0 border-end-0 border-warning border-2" required>
				</div>
				<!-- Jika tipenya dropdown -->
				<?php elseif($this->fields[$fieldIndex]['type'] == "dropdown" || $this->fields[$fieldIndex]['type'] == "select" ): ?>
				<div class="form-group mb-4">
					<!-- Label -->
					<label for="<?php echo $this->fields[$fieldIndex]['name']; ?>" class="form-label fw-bold">
					<?php echo $this->fields[$fieldIndex]['label']; ?>
					</label>
					<!-- Select n Option -->
					<select class="form-select text-secondary fw-bold" name="<?php echo $this->fields[$fieldIndex]['name']; ?>" required>
						<!-- Perulangan -->
						<?php for($optionIndex = 0; $optionIndex < count($this->fields[$fieldIndex]['optionsValue']); $optionIndex++): ?>
						<!-- Option -->
						<option value="<?php echo $this->fields[$fieldIndex]['optionsValue'][$optionIndex]; ?>">
							<!-- Option Label -->
							<?php echo $this->fields[$fieldIndex]['optionsLabel'][$optionIndex]; ?>
						</option>
						<?php endfor; ?>
					</select>
            	</div>
			<?php endif; ?>
		<?php endfor; ?>
	</form>

	<?php }
}