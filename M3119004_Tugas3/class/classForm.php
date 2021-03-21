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
	{ //kurawal pembuka display_form() ?>

	<form action="<?php echo $this->action; ?>" method="<?php echo $this->method; ?>">
		<!-- Memulai perulangan field -->
		<?php for ($i = 0; $i < $this->field; $i++): ?>
			<!-- Cek tipe field -->
            <!-- Untuk tipe select -->
			<?php if($this->fields[$i]['type'] == "select"): ?>
                <!-- Label -->
                <label> <?php echo $this->fields[$i]['label']; ?> </label>
                <select name="<?php echo $this->fields[$i]['name']; ?>" required>
                    <!-- Perulangan -->
                    <?php for($j = 0; $j < count($this->fields[$i]['value']); $j++): ?>
                    <!-- 
                        count($this->fields[$i]['value']) digunakan untuk menghitung berapa banyak isi array 'value' saat menambahkan field
                     -->
                    <!-- Option -->
                    <option value="<?php echo $this->fields[$i]['value'][$j]; ?>">
                        <!-- Option Label -->
                        <?php echo $this->fields[$i]['valueLabel'][$j]; ?>
                    </option>
                    <?php endfor; ?>
                </select>
                <!-- Untuk tipe checkbox dan radio -->
				<?php elseif($this->fields[$i]['type'] == "checkbox" || $this->fields[$i]['type'] == "radio" ): ?>
				<label>
					<?php echo $this->fields[$i]['label']; ?>
				</label>
                <!-- Perulangan -->
				<?php for($j = 0; $j < count($this->fields[$i]['value']); $j++): ?>
					<input  type="<?php echo $this->fields[$i]['type']; ?>"
                            name="<?php echo $this->fields[$i]['name']; ?>"
                            value="<?php echo $this->fields[$i]['value'][$j]; ?>" required>
                    <!-- Label Value -->
                    <label>
                        <?php echo $this->fields[$i]['valueLabel'][$j]; ?>
                    </label>
				<?php endfor; ?>
                <!-- Untuk tipe textarea -->
				<?php elseif($this->fields[$i]['type'] == "textarea"): ?>
				<label><?php echo $this->fields[$i]['label']; ?></label>
                <textarea name="<?php echo $this->fields[$i]['name']; ?>"></textarea>
                <!-- Untuk tipe yang lain (text, number, password, email, date) -->
				<?php else: ?>
				<label><?php echo $this->fields[$i]['label']; ?></label>
                <input  type="<?php echo $this->fields[$i]['type']; ?>"
                        name="<?php echo $this->fields[$i]['name']; ?>" required>
			<?php endif; ?>
		<?php endfor; ?>
		<!-- Submit button -->
		<button type="input" name="<?php echo $this->submit; ?>">
            <?php echo $this->buttonText; ?>
		</button>
	</form>

	<?php } // Kurawal penutup function display_form()
}

/**
 * Penggunaan class Form
    * class Form(file action form, method form, submit name, tulisan di tombol submit)
    * $myForm = new Form('index.php', 'POST', 'submit', "Daftar");

 * Menambahkan field normal
    * $myForm->add_field('Nama', 'nama', 'text');
    * $myForm->add_field('Email', 'email', 'email');
    * $myForm->add_field('Password', 'password', 'password');

 * Field dengan tipe select dan radio
    * $myForm->add_field('Program Studi', 'prodi', 'select', array("ti", "te"), array("D3 Teknik Informatika", "D3 Teknik Elektro"));
    * $myForm->add_field('Jenis Kelamin', 'gender', 'radio', array("l", "p"), array("Laki-laki", "Perempuan"));

 * Field dengan tipe textarea
    * $myForm->add_field('Alamat', 'alamat', 'textarea');

 * Field dengan tipe checkbox
    * $myForm->add_field(null, 'agreement', 'checkbox', array(true), array("Dengan mendaftar saya menyetujui persyaratan yang berlaku."));
 */