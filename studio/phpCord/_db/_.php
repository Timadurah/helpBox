<?php



class cord_sql {
	public $value, $sucess=true, $error=false, $data, $runner, $count;

 function insert()
{
require "phpCord/_con/config.ini";

$val_amt =  count($this->value);
if ($val_amt == 0) {
	echo "no value is input to insert";
}

elseif ($val_amt == 1) {
$Con__cord=$conn->prepare($this->runner);
$Con__cord->bindParam(1, $this->value[0]);
$Con__cord->execute();
if ($Con__cord) {
return $this->sucess;
}
else{
	return $this->error;

}

}


elseif ($val_amt == 2) {
$Con__cord=$conn->prepare($this->runner);
$Con__cord->bindParam(1, $this->value[0]);
$Con__cord->bindParam(2, $this->value[1]);
$Con__cord->execute();
if ($Con__cord) {
return $this->sucess;
}
else{
	return $this->error;

}


}


elseif ($val_amt == 3) {
$val = '?,?,?';


$Con__cord=$conn->prepare($this->runner);
$Con__cord->bindParam(1, $this->value[0]);
$Con__cord->bindParam(2, $this->value[1]);
$Con__cord->bindParam(3, $this->value[2]);
$Con__cord->execute();
if ($Con__cord) {
return $this->sucess;
}
else{
	return $this->error;

}

}


elseif ($val_amt == 4) {
$Con__cord=$conn->prepare($this->runner);
$Con__cord->bindParam(1, $this->value[0]);
$Con__cord->bindParam(2, $this->value[1]);
$Con__cord->bindParam(3, $this->value[2]);
$Con__cord->bindParam(4, $this->value[3]);
$Con__cord->execute();
if ($Con__cord) {
return $this->sucess;
}
else{
	return $this->error;

}}


elseif ($val_amt == 5) {
$Con__cord=$conn->prepare($this->runner);
$Con__cord->bindParam(1, $this->value[0]);
$Con__cord->bindParam(2, $this->value[1]);
$Con__cord->bindParam(3, $this->value[2]);
$Con__cord->bindParam(4, $this->value[3]);
$Con__cord->bindParam(5, $this->value[4]);
$Con__cord->execute();
if ($Con__cord) {
return $this->sucess;
}
else{
	return $this->error;

}


}


elseif ($val_amt == 6) {
$Con__cord=$conn->prepare($this->runner);
$Con__cord->bindParam(1, $this->value[0]);
$Con__cord->bindParam(2, $this->value[1]);
$Con__cord->bindParam(3, $this->value[2]);
$Con__cord->bindParam(4, $this->value[3]);
$Con__cord->bindParam(5, $this->value[4]);
$Con__cord->bindParam(6, $this->value[5]);
$Con__cord->execute();
if ($Con__cord) {
return $this->sucess;
}
else{
	return $this->error;

}

}


elseif ($val_amt == 7) {
$Con__cord=$conn->prepare($this->runner);
$Con__cord->bindParam(1, $this->value[0]);
$Con__cord->bindParam(2, $this->value[1]);
$Con__cord->bindParam(3, $this->value[2]);
$Con__cord->bindParam(4, $this->value[3]);
$Con__cord->bindParam(5, $this->value[4]);
$Con__cord->bindParam(6, $this->value[5]);
$Con__cord->bindParam(7, $this->value[6]);
$Con__cord->execute();
if ($Con__cord) {
return $this->sucess;
}
else{
	return $this->error;

}}


elseif ($val_amt == 8) {
$Con__cord=$conn->prepare($this->runner);
$Con__cord->bindParam(1, $this->value[0]);
$Con__cord->bindParam(2, $this->value[1]);
$Con__cord->bindParam(3, $this->value[2]);
$Con__cord->bindParam(4, $this->value[3]);
$Con__cord->bindParam(5, $this->value[4]);
$Con__cord->bindParam(6, $this->value[5]);
$Con__cord->bindParam(7, $this->value[6]);
$Con__cord->bindParam(8, $this->value[7]);
$Con__cord->execute();
if ($Con__cord) {
return $this->sucess;
}
else{
	return $this->error;

}

}


elseif ($val_amt == 9) {
$Con__cord=$conn->prepare($this->runner);
$Con__cord->bindParam(1, $this->value[0]);
$Con__cord->bindParam(2, $this->value[1]);
$Con__cord->bindParam(3, $this->value[2]);
$Con__cord->bindParam(4, $this->value[3]);
$Con__cord->bindParam(5, $this->value[4]);
$Con__cord->bindParam(6, $this->value[5]);
$Con__cord->bindParam(7, $this->value[6]);
$Con__cord->bindParam(8, $this->value[7]);
$Con__cord->bindParam(9, $this->value[8]);

$Con__cord->execute();
if ($Con__cord) {
return $this->sucess;
}
else{
	return $this->error;

}}


elseif ($val_amt == 10) {
$Con__cord->bindParam(1, $this->value[0]);
$Con__cord->bindParam(2, $this->value[1]);
$Con__cord->bindParam(3, $this->value[2]);
$Con__cord->bindParam(4, $this->value[3]);
$Con__cord->bindParam(5, $this->value[4]);
$Con__cord->bindParam(6, $this->value[5]);
$Con__cord->bindParam(7, $this->value[6]);
$Con__cord->bindParam(8, $this->value[7]);
$Con__cord->bindParam(9, $this->value[8]);
$Con__cord->bindParam(10, $this->value[9]);
$Con__cord->execute();
if ($Con__cord) {
return $this->sucess;
}
else{
	return $this->error;

}}


elseif ($val_amt == 11) {
$Con__cord=$conn->prepare($this->runner);
$Con__cord->bindParam(1, $this->value[0]);
$Con__cord->bindParam(2, $this->value[1]);
$Con__cord->bindParam(3, $this->value[2]);
$Con__cord->bindParam(4, $this->value[3]);
$Con__cord->bindParam(5, $this->value[4]);
$Con__cord->bindParam(6, $this->value[5]);
$Con__cord->bindParam(7, $this->value[6]);
$Con__cord->bindParam(8, $this->value[7]);
$Con__cord->bindParam(9, $this->value[8]);
$Con__cord->bindParam(10, $this->value[9]);
$Con__cord->bindParam(11, $this->value[10]);
$Con__cord->execute();
if ($Con__cord) {
return $this->sucess;
}
else{
	return $this->error;

}

}


elseif ($val_amt == 12) {
$Con__cord=$conn->prepare($this->runner);
$Con__cord->bindParam(1, $this->value[1]);
$Con__cord->bindParam(2, $this->value[2]);
$Con__cord->bindParam(3, $this->value[3]);
$Con__cord->bindParam(4, $this->value[4]);
$Con__cord->bindParam(5, $this->value[5]);
$Con__cord->bindParam(6, $this->value[6]);
$Con__cord->bindParam(7, $this->value[7]);
$Con__cord->bindParam(8, $this->value[8]);
$Con__cord->bindParam(9, $this->value[9]);

$Con__cord->bindParam(10, $this->value[10]);
$Con__cord->bindParam(11, $this->value[11]);
$Con__cord->bindParam(12, $this->value[12]);  
$Con__cord->execute();
if ($Con__cord) {
return $this->sucess;
}
else{
	return $this->error;

}

}


elseif ($val_amt == 13) {
$Con__cord=$conn->prepare($this->runner);
$Con__cord->bindParam(1, $this->value[1]);
$Con__cord->bindParam(2, $this->value[2]);
$Con__cord->bindParam(3, $this->value[3]);
$Con__cord->bindParam(4, $this->value[4]);
$Con__cord->bindParam(5, $this->value[5]);
$Con__cord->bindParam(6, $this->value[6]);
$Con__cord->bindParam(7, $this->value[7]);
$Con__cord->bindParam(8, $this->value[8]);
$Con__cord->bindParam(9, $this->value[9]);

$Con__cord->bindParam(10, $this->value[10]);
$Con__cord->bindParam(11, $this->value[11]);
$Con__cord->bindParam(12, $this->value[12]);
$Con__cord->bindParam(13, $this->value[13]);
$Con__cord->execute();
if ($Con__cord) {
return $this->sucess;
}
else{
	return $this->error;

}

}


elseif ($val_amt == 14) {
$Con__cord=$conn->prepare($this->runner);
$Con__cord->bindParam(1, $this->value[1]);
$Con__cord->bindParam(2, $this->value[2]);
$Con__cord->bindParam(3, $this->value[3]);
$Con__cord->bindParam(4, $this->value[4]);
$Con__cord->bindParam(5, $this->value[5]);
$Con__cord->bindParam(6, $this->value[6]);
$Con__cord->bindParam(7, $this->value[7]);
$Con__cord->bindParam(8, $this->value[8]);
$Con__cord->bindParam(9, $this->value[9]);

$Con__cord->bindParam(10, $this->value[10]);
$Con__cord->bindParam(11, $this->value[11]);
$Con__cord->bindParam(12, $this->value[12]);
$Con__cord->bindParam(13, $this->value[13]);
$Con__cord->bindParam(14, $this->value[14]);
$Con__cord->execute();
if ($Con__cord) {
return $this->sucess;
}
else{
	return $this->error;

}

}


elseif ($val_amt == 15) {
$val = '?,?,?,?,?,?,?,?,?,?,?,?,?,?,?';


$Con__cord=$conn->prepare($this->runner);
$Con__cord->bindParam(1, $this->value[1]);
$Con__cord->bindParam(2, $this->value[2]);
$Con__cord->bindParam(3, $this->value[3]);
$Con__cord->bindParam(4, $this->value[4]);
$Con__cord->bindParam(5, $this->value[5]);
$Con__cord->bindParam(6, $this->value[6]);
$Con__cord->bindParam(7, $this->value[7]);
$Con__cord->bindParam(8, $this->value[8]);
$Con__cord->bindParam(9, $this->value[9]);

$Con__cord->bindParam(10, $this->value[10]);
$Con__cord->bindParam(11, $this->value[11]);
$Con__cord->bindParam(12, $this->value[12]);
$Con__cord->bindParam(13, $this->value[13]);
$Con__cord->bindParam(14, $this->value[14]);
$Con__cord->bindParam(15, $this->value[15]);
$Con__cord->execute();
if ($Con__cord) {
return $this->sucess;
}
else{
	return $this->error;

}

}


elseif ($val_amt == 16) {
$val = '?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?';


$Con__cord=$conn->prepare($this->runner);
$Con__cord->bindParam(1, $this->value[1]);
$Con__cord->bindParam(2, $this->value[2]);
$Con__cord->bindParam(3, $this->value[3]);
$Con__cord->bindParam(4, $this->value[4]);
$Con__cord->bindParam(5, $this->value[5]);
$Con__cord->bindParam(6, $this->value[6]);
$Con__cord->bindParam(7, $this->value[7]);
$Con__cord->bindParam(8, $this->value[8]);
$Con__cord->bindParam(9, $this->value[9]);

$Con__cord->bindParam(10, $this->value[10]);
$Con__cord->bindParam(11, $this->value[11]);
$Con__cord->bindParam(12, $this->value[12]);
$Con__cord->bindParam(13, $this->value[13]);
$Con__cord->bindParam(14, $this->value[14]);
$Con__cord->bindParam(15, $this->value[15]);
$Con__cord->bindParam(16, $this->value[16]);
$Con__cord->execute();
if ($Con__cord) {
return $this->sucess;
}
else{
	return $this->error;

}

}


elseif ($val_amt == 17) {
$Con__cord=$conn->prepare($this->runner);
$Con__cord->bindParam(1, $this->value[1]);
$Con__cord->bindParam(2, $this->value[2]);
$Con__cord->bindParam(3, $this->value[3]);
$Con__cord->bindParam(4, $this->value[4]);
$Con__cord->bindParam(5, $this->value[5]);
$Con__cord->bindParam(6, $this->value[6]);
$Con__cord->bindParam(7, $this->value[7]);
$Con__cord->bindParam(8, $this->value[8]);
$Con__cord->bindParam(9, $this->value[9]);

$Con__cord->bindParam(10, $this->value[10]);
$Con__cord->bindParam(11, $this->value[11]);
$Con__cord->bindParam(12, $this->value[12]);
$Con__cord->bindParam(13, $this->value[13]);
$Con__cord->bindParam(14, $this->value[14]);
$Con__cord->bindParam(15, $this->value[15]);
$Con__cord->bindParam(16, $this->value[16]);
$Con__cord->bindParam(17, $this->value[17]);
$Con__cord->bindParam(18, $this->value[18]);
$Con__cord->bindParam(10, $this->value[10]);
$Con__cord->bindParam(11, $this->value[11]);
$Con__cord->bindParam(12, $this->value[12]);
$Con__cord->bindParam(13, $this->value[13]);
$Con__cord->bindParam(14, $this->value[14]);
$Con__cord->bindParam(15, $this->value[15]);
$Con__cord->bindParam(16, $this->value[16]);
$Con__cord->bindParam(17, $this->value[17]);
$Con__cord->execute();
if ($Con__cord) {
return $this->sucess;
}
else{
	return $this->error;

}

}


elseif ($val_amt == 18) {
$Con__cord=$conn->prepare($this->runner);
$Con__cord->bindParam(1, $this->value[1]);
$Con__cord->bindParam(2, $this->value[2]);
$Con__cord->bindParam(3, $this->value[3]);
$Con__cord->bindParam(4, $this->value[4]);
$Con__cord->bindParam(5, $this->value[5]);
$Con__cord->bindParam(6, $this->value[6]);
$Con__cord->bindParam(7, $this->value[7]);
$Con__cord->bindParam(8, $this->value[8]);
$Con__cord->bindParam(9, $this->value[9]);

$Con__cord->bindParam(10, $this->value[10]);
$Con__cord->bindParam(11, $this->value[11]);
$Con__cord->bindParam(12, $this->value[12]);
$Con__cord->bindParam(13, $this->value[13]);
$Con__cord->bindParam(14, $this->value[14]);
$Con__cord->bindParam(15, $this->value[15]);
$Con__cord->bindParam(16, $this->value[16]);
$Con__cord->bindParam(17, $this->value[17]);
$Con__cord->bindParam(18, $this->value[18]);
$Con__cord->execute();
if ($Con__cord) {
return $this->sucess;
}
else{
	return $this->error;

}

}


elseif ($val_amt == 19) {
$Con__cord=$conn->prepare($this->runner);
$Con__cord->bindParam(1, $this->value[1]);
$Con__cord->bindParam(2, $this->value[2]);
$Con__cord->bindParam(3, $this->value[3]);
$Con__cord->bindParam(4, $this->value[4]);
$Con__cord->bindParam(5, $this->value[5]);
$Con__cord->bindParam(6, $this->value[6]);
$Con__cord->bindParam(7, $this->value[7]);
$Con__cord->bindParam(8, $this->value[8]);
$Con__cord->bindParam(9, $this->value[9]);
$Con__cord->bindParam(10, $this->value[10]);
$Con__cord->bindParam(11, $this->value[11]);
$Con__cord->bindParam(12, $this->value[12]);
$Con__cord->bindParam(13, $this->value[13]);
$Con__cord->bindParam(14, $this->value[14]);
$Con__cord->bindParam(15, $this->value[15]);
$Con__cord->bindParam(16, $this->value[16]);
$Con__cord->bindParam(17, $this->value[17]);
$Con__cord->bindParam(18, $this->value[18]);
$Con__cord->bindParam(19, $this->value[19]);
$Con__cord->execute();
if ($Con__cord) {
return $this->sucess;
}
else{
	return $this->error;

}

}


elseif ($val_amt == 20) {
$Con__cord=$conn->prepare($this->runner);
$Con__cord->bindParam(1, $this->value[1]);
$Con__cord->bindParam(2, $this->value[2]);
$Con__cord->bindParam(3, $this->value[3]);
$Con__cord->bindParam(4, $this->value[4]);
$Con__cord->bindParam(5, $this->value[5]);
$Con__cord->bindParam(6, $this->value[6]);
$Con__cord->bindParam(7, $this->value[7]);
$Con__cord->bindParam(8, $this->value[8]);
$Con__cord->bindParam(9, $this->value[9]);
$Con__cord->bindParam(10, $this->value[10]);
$Con__cord->bindParam(11, $this->value[11]);
$Con__cord->bindParam(12, $this->value[12]);
$Con__cord->bindParam(13, $this->value[13]);
$Con__cord->bindParam(14, $this->value[14]);
$Con__cord->bindParam(15, $this->value[15]);
$Con__cord->bindParam(16, $this->value[16]);
$Con__cord->bindParam(17, $this->value[17]);
$Con__cord->bindParam(18, $this->value[18]);
$Con__cord->bindParam(19, $this->value[19]);
$Con__cord->bindParam(20, $this->value[20]);
$Con__cord->execute();
if ($Con__cord) {
return $this->sucess;
}
else{
	return $this->error;

}}


}



function select()
{


require "phpCord/_con/config.ini";
$val_amt =  count($this->value);





if ($val_amt == 0) {
	echo "no value is input";
}





elseif ($val_amt == 1) {
$Con__cord=$conn->prepare($this->runner);
$Con__cord->bindParam(1, $this->value[0]);
$Con__cord->execute();
$this->count = $Con__cord->rowCount();
if ($Con__cord) {
return $this->sucess;
}
else{
	return $this->error;

}

}


elseif ($val_amt == 2) {
$Con__cord=$conn->prepare($this->runner);
$Con__cord->bindParam(1, $this->value[0]);
$Con__cord->bindParam(2, $this->value[1]);
$Con__cord->execute();

$this->count = $Con__cord->rowCount();

if ($Con__cord) {
return $this->sucess;
}
else{
	return $this->error;

}


}


elseif ($val_amt == 3) {
$val = '?,?,?';


$Con__cord=$conn->prepare($this->runner);
$Con__cord->bindParam(1, $this->value[0]);
$Con__cord->bindParam(2, $this->value[1]);
$Con__cord->bindParam(3, $this->value[2]);
$Con__cord->execute();

$this->count = $Con__cord->rowCount();

if ($Con__cord) {
return $this->sucess;
}
else{
	return $this->error;

}

}


elseif ($val_amt == 4) {
$Con__cord=$conn->prepare($this->runner);
$Con__cord->bindParam(1, $this->value[0]);
$Con__cord->bindParam(2, $this->value[1]);
$Con__cord->bindParam(3, $this->value[2]);
$Con__cord->bindParam(4, $this->value[3]);
$Con__cord->execute();

$this->count = $Con__cord->rowCount();

if ($Con__cord) {
return $this->sucess;
}
else{
	return $this->error;

}}


elseif ($val_amt == 5) {
$Con__cord=$conn->prepare($this->runner);
$Con__cord->bindParam(1, $this->value[0]);
$Con__cord->bindParam(2, $this->value[1]);
$Con__cord->bindParam(3, $this->value[2]);
$Con__cord->bindParam(4, $this->value[3]);
$Con__cord->bindParam(5, $this->value[4]);
$Con__cord->execute();

$this->count = $Con__cord->rowCount();

if ($Con__cord) {
return $this->sucess;
}
else{
	return $this->error;

}


}


elseif ($val_amt == 6) {
$Con__cord=$conn->prepare($this->runner);
$Con__cord->bindParam(1, $this->value[0]);
$Con__cord->bindParam(2, $this->value[1]);
$Con__cord->bindParam(3, $this->value[2]);
$Con__cord->bindParam(4, $this->value[3]);
$Con__cord->bindParam(5, $this->value[4]);
$Con__cord->bindParam(6, $this->value[5]);
$Con__cord->execute();

$this->count = $Con__cord->rowCount();

if ($Con__cord) {
return $this->sucess;
}
else{
	return $this->error;

}

}


elseif ($val_amt == 7) {
$Con__cord=$conn->prepare($this->runner);
$Con__cord->bindParam(1, $this->value[0]);
$Con__cord->bindParam(2, $this->value[1]);
$Con__cord->bindParam(3, $this->value[2]);
$Con__cord->bindParam(4, $this->value[3]);
$Con__cord->bindParam(5, $this->value[4]);
$Con__cord->bindParam(6, $this->value[5]);
$Con__cord->bindParam(7, $this->value[6]);
$Con__cord->execute();

$this->count = $Con__cord->rowCount();

if ($Con__cord) {
return $this->sucess;
}
else{
	return $this->error;

}}


elseif ($val_amt == 8) {
$Con__cord=$conn->prepare($this->runner);
$Con__cord->bindParam(1, $this->value[0]);
$Con__cord->bindParam(2, $this->value[1]);
$Con__cord->bindParam(3, $this->value[2]);
$Con__cord->bindParam(4, $this->value[3]);
$Con__cord->bindParam(5, $this->value[4]);
$Con__cord->bindParam(6, $this->value[5]);
$Con__cord->bindParam(7, $this->value[6]);
$Con__cord->bindParam(8, $this->value[7]);
$Con__cord->execute();

$this->count = $Con__cord->rowCount();

if ($Con__cord) {
return $this->sucess;
}
else{
	return $this->error;

}

}


elseif ($val_amt == 9) {
$Con__cord=$conn->prepare($this->runner);
$Con__cord->bindParam(1, $this->value[0]);
$Con__cord->bindParam(2, $this->value[1]);
$Con__cord->bindParam(3, $this->value[2]);
$Con__cord->bindParam(4, $this->value[3]);
$Con__cord->bindParam(5, $this->value[4]);
$Con__cord->bindParam(6, $this->value[5]);
$Con__cord->bindParam(7, $this->value[6]);
$Con__cord->bindParam(8, $this->value[7]);
$Con__cord->bindParam(9, $this->value[8]);

$Con__cord->execute();

$this->count = $Con__cord->rowCount();

if ($Con__cord) {
return $this->sucess;
}
else{
	return $this->error;

}}


elseif ($val_amt == 10) {
$Con__cord->bindParam(1, $this->value[0]);
$Con__cord->bindParam(2, $this->value[1]);
$Con__cord->bindParam(3, $this->value[2]);
$Con__cord->bindParam(4, $this->value[3]);
$Con__cord->bindParam(5, $this->value[4]);
$Con__cord->bindParam(6, $this->value[5]);
$Con__cord->bindParam(7, $this->value[6]);
$Con__cord->bindParam(8, $this->value[7]);
$Con__cord->bindParam(9, $this->value[8]);
$Con__cord->bindParam(10, $this->value[9]);
$Con__cord->execute();

$this->count = $Con__cord->rowCount();

if ($Con__cord) {
return $this->sucess;
}
else{
	return $this->error;

}}




}






function update()
{


require "phpCord/_con/config.ini";
$val_amt =  count($this->value);





if ($val_amt == 0) {
	echo "no value is input";
}





elseif ($val_amt == 1) {
$Con__cord=$conn->prepare($this->runner);
$Con__cord->bindParam(1, $this->value[0]);
$Con__cord->execute();
if ($Con__cord) {
return $this->sucess;
}
else{
	return $this->error;

}

}


elseif ($val_amt == 2) {
$Con__cord=$conn->prepare($this->runner);
$Con__cord->bindParam(1, $this->value[0]);
$Con__cord->bindParam(2, $this->value[1]);
$Con__cord->execute();
if ($Con__cord) {
return $this->sucess;
}
else{
	return $this->error;

}


}


elseif ($val_amt == 3) {
$Con__cord=$conn->prepare($this->runner);
$Con__cord->bindParam(1, $this->value[0]);
$Con__cord->bindParam(2, $this->value[1]);
$Con__cord->bindParam(3, $this->value[2]);
$Con__cord->execute();
if ($Con__cord) {
return $this->sucess;
}
else{
	return $this->error;

}

}


elseif ($val_amt == 4) {
$Con__cord=$conn->prepare($this->runner);
$Con__cord->bindParam(1, $this->value[0]);
$Con__cord->bindParam(2, $this->value[1]);
$Con__cord->bindParam(3, $this->value[2]);
$Con__cord->bindParam(4, $this->value[3]);
$Con__cord->execute();
if ($Con__cord) {
return $this->sucess;
}
else{
	return $this->error;

}}


elseif ($val_amt == 5) {
$Con__cord=$conn->prepare($this->runner);
$Con__cord->bindParam(1, $this->value[0]);
$Con__cord->bindParam(2, $this->value[1]);
$Con__cord->bindParam(3, $this->value[2]);
$Con__cord->bindParam(4, $this->value[3]);
$Con__cord->bindParam(5, $this->value[4]);
$Con__cord->execute();
if ($Con__cord) {
return $this->sucess;
}
else{
	return $this->error;

}


}


elseif ($val_amt == 6) {
$Con__cord=$conn->prepare($this->runner);
$Con__cord->bindParam(1, $this->value[0]);
$Con__cord->bindParam(2, $this->value[1]);
$Con__cord->bindParam(3, $this->value[2]);
$Con__cord->bindParam(4, $this->value[3]);
$Con__cord->bindParam(5, $this->value[4]);
$Con__cord->bindParam(6, $this->value[5]);
$Con__cord->execute();
if ($Con__cord) {
return $this->sucess;
}
else{
	return $this->error;

}

}


elseif ($val_amt == 7) {
$Con__cord=$conn->prepare($this->runner);
$Con__cord->bindParam(1, $this->value[0]);
$Con__cord->bindParam(2, $this->value[1]);
$Con__cord->bindParam(3, $this->value[2]);
$Con__cord->bindParam(4, $this->value[3]);
$Con__cord->bindParam(5, $this->value[4]);
$Con__cord->bindParam(6, $this->value[5]);
$Con__cord->bindParam(7, $this->value[6]);
$Con__cord->execute();
if ($Con__cord) {
return $this->sucess;
}
else{
	return $this->error;

}}


elseif ($val_amt == 8) {
$Con__cord=$conn->prepare($this->runner);
$Con__cord->bindParam(1, $this->value[0]);
$Con__cord->bindParam(2, $this->value[1]);
$Con__cord->bindParam(3, $this->value[2]);
$Con__cord->bindParam(4, $this->value[3]);
$Con__cord->bindParam(5, $this->value[4]);
$Con__cord->bindParam(6, $this->value[5]);
$Con__cord->bindParam(7, $this->value[6]);
$Con__cord->bindParam(8, $this->value[7]);
$Con__cord->execute();
if ($Con__cord) {
return $this->sucess;
}
else{
	return $this->error;

}

}


elseif ($val_amt == 9) {
$Con__cord=$conn->prepare($this->runner);
$Con__cord->bindParam(1, $this->value[0]);
$Con__cord->bindParam(2, $this->value[1]);
$Con__cord->bindParam(3, $this->value[2]);
$Con__cord->bindParam(4, $this->value[3]);
$Con__cord->bindParam(5, $this->value[4]);
$Con__cord->bindParam(6, $this->value[5]);
$Con__cord->bindParam(7, $this->value[6]);
$Con__cord->bindParam(8, $this->value[7]);
$Con__cord->bindParam(9, $this->value[8]);

$Con__cord->execute();
if ($Con__cord) {
return $this->sucess;
}
else{
	return $this->error;

}}


elseif ($val_amt == 10) {
$Con__cord->bindParam(1, $this->value[0]);
$Con__cord->bindParam(2, $this->value[1]);
$Con__cord->bindParam(3, $this->value[2]);
$Con__cord->bindParam(4, $this->value[3]);
$Con__cord->bindParam(5, $this->value[4]);
$Con__cord->bindParam(6, $this->value[5]);
$Con__cord->bindParam(7, $this->value[6]);
$Con__cord->bindParam(8, $this->value[7]);
$Con__cord->bindParam(9, $this->value[8]);
$Con__cord->bindParam(10, $this->value[9]);
$Con__cord->execute();
if ($Con__cord) {
return $this->sucess;
}
else{
	return $this->error;

}}




}







function delete()
{


require "phpCord/_con/config.ini";
$val_amt =  count($this->value);





if ($val_amt == 0) {
	echo "no value is input";
}





elseif ($val_amt == 1) {
$Con__cord=$conn->prepare($this->runner);
$Con__cord->bindParam(1, $this->value[0]);
$Con__cord->execute();
if ($Con__cord) {
return $this->sucess;
}
else{
	return $this->error;

}

}


elseif ($val_amt == 2) {
$Con__cord=$conn->prepare($this->runner);
$Con__cord->bindParam(1, $this->value[0]);
$Con__cord->bindParam(2, $this->value[1]);
$Con__cord->execute();
if ($Con__cord) {
return $this->sucess;
}
else{
	return $this->error;

}


}


elseif ($val_amt == 3) {
$val = '?,?,?';


$Con__cord=$conn->prepare($this->runner);
$Con__cord->bindParam(1, $this->value[0]);
$Con__cord->bindParam(2, $this->value[1]);
$Con__cord->bindParam(3, $this->value[2]);
$Con__cord->execute();
if ($Con__cord) {
return $this->sucess;
}
else{
	return $this->error;

}

}


elseif ($val_amt == 4) {
$Con__cord=$conn->prepare($this->runner);
$Con__cord->bindParam(1, $this->value[0]);
$Con__cord->bindParam(2, $this->value[1]);
$Con__cord->bindParam(3, $this->value[2]);
$Con__cord->bindParam(4, $this->value[3]);
$Con__cord->execute();
if ($Con__cord) {
return $this->sucess;
}
else{
	return $this->error;

}}


elseif ($val_amt == 5) {
$Con__cord=$conn->prepare($this->runner);
$Con__cord->bindParam(1, $this->value[0]);
$Con__cord->bindParam(2, $this->value[1]);
$Con__cord->bindParam(3, $this->value[2]);
$Con__cord->bindParam(4, $this->value[3]);
$Con__cord->bindParam(5, $this->value[4]);
$Con__cord->execute();
if ($Con__cord) {
return $this->sucess;
}
else{
	return $this->error;

}


}


elseif ($val_amt == 6) {
$Con__cord=$conn->prepare($this->runner);
$Con__cord->bindParam(1, $this->value[0]);
$Con__cord->bindParam(2, $this->value[1]);
$Con__cord->bindParam(3, $this->value[2]);
$Con__cord->bindParam(4, $this->value[3]);
$Con__cord->bindParam(5, $this->value[4]);
$Con__cord->bindParam(6, $this->value[5]);
$Con__cord->execute();
if ($Con__cord) {
return $this->sucess;
}
else{
	return $this->error;

}

}


elseif ($val_amt == 7) {
$Con__cord=$conn->prepare($this->runner);
$Con__cord->bindParam(1, $this->value[0]);
$Con__cord->bindParam(2, $this->value[1]);
$Con__cord->bindParam(3, $this->value[2]);
$Con__cord->bindParam(4, $this->value[3]);
$Con__cord->bindParam(5, $this->value[4]);
$Con__cord->bindParam(6, $this->value[5]);
$Con__cord->bindParam(7, $this->value[6]);
$Con__cord->execute();
if ($Con__cord) {
return $this->sucess;
}
else{
	return $this->error;

}}


elseif ($val_amt == 8) {
$Con__cord=$conn->prepare($this->runner);
$Con__cord->bindParam(1, $this->value[0]);
$Con__cord->bindParam(2, $this->value[1]);
$Con__cord->bindParam(3, $this->value[2]);
$Con__cord->bindParam(4, $this->value[3]);
$Con__cord->bindParam(5, $this->value[4]);
$Con__cord->bindParam(6, $this->value[5]);
$Con__cord->bindParam(7, $this->value[6]);
$Con__cord->bindParam(8, $this->value[7]);
$Con__cord->execute();
if ($Con__cord) {
return $this->sucess;
}
else{
	return $this->error;

}

}


elseif ($val_amt == 9) {
$Con__cord=$conn->prepare($this->runner);
$Con__cord->bindParam(1, $this->value[0]);
$Con__cord->bindParam(2, $this->value[1]);
$Con__cord->bindParam(3, $this->value[2]);
$Con__cord->bindParam(4, $this->value[3]);
$Con__cord->bindParam(5, $this->value[4]);
$Con__cord->bindParam(6, $this->value[5]);
$Con__cord->bindParam(7, $this->value[6]);
$Con__cord->bindParam(8, $this->value[7]);
$Con__cord->bindParam(9, $this->value[8]);

$Con__cord->execute();
if ($Con__cord) {
return $this->sucess;
}
else{
	return $this->error;

}}


elseif ($val_amt == 10) {
$Con__cord->bindParam(1, $this->value[0]);
$Con__cord->bindParam(2, $this->value[1]);
$Con__cord->bindParam(3, $this->value[2]);
$Con__cord->bindParam(4, $this->value[3]);
$Con__cord->bindParam(5, $this->value[4]);
$Con__cord->bindParam(6, $this->value[5]);
$Con__cord->bindParam(7, $this->value[6]);
$Con__cord->bindParam(8, $this->value[7]);
$Con__cord->bindParam(9, $this->value[8]);
$Con__cord->bindParam(10, $this->value[9]);
$Con__cord->execute();
if ($Con__cord) {
return $this->sucess;
}
else{
	return $this->error;

}}




}



function create_db($value='')
{



$sql= "CREATE DATABASE IF NOT EXISTS ".$value."";
$cord_datacon=$conn->prepare($sql);
$cord_datacon->bindParam(1, strip_tags($value));
$cord_datacon->execute();
if ($sql) {
return $this->sucess;
}
else{
	return $this->error;

}

}


function create_table()
{


$cord_datacon=$conn->prepare($this->runner);
$cord_datacon->execute();
if ($cord_datacon) {
return $this->sucess;
}
else{
	return $this->error;

}



}

}



















































































?>