<?php
 require("header.php");
  ?>
	<div class="row">
		<div class="col-md-6">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>
							#
						</th>
						<th>
							Barcos
						</th>
						<th>
							Coordenadas
						</th>
						<th>
							Alineacion
						</th>
					</tr>
				</thead>
				<tbody>
					<tr class="table-active">
						<td>
							1
						</td>
						<td>
							Barco 1
						</td>
						<td>
							<input type="text" maxlength="1" class="input" style="width: 50px" name=""> -
							<input type="text" maxlength="1" class="input" style="width: 50px" name="">
						</td>
						<td>
							<select class="form-control">
								<option value="1">Horizontal</option>
								<option value="2">Vertical</option>
							</select>
						</td>
					</tr>
					<tr class="table-success">
						<td>
							2
						</td>
						<td>
							Barco 2
						</td>
						<td>
							<input type="text" maxlength="1" class="input" style="width: 50px" name=""> -
							<input type="text" maxlength="1" class="input" style="width: 50px" name="">
						</td>
						<td>
							<select class="form-control">
								<option value="1">Horizontal</option>
								<option value="2">Vertical</option>
							</select>
						</td>
					</tr>
					<tr class="table-warning">
						<td>
							3
						</td>
						<td>
							Barco 3
						</td>
						<td>
							<input type="text" maxlength="1" class="input" style="width: 50px" name=""> -
							<input type="text" maxlength="1" class="input" style="width: 50px" name="">
						</td>
						<td>
							<select class="form-control">
								<option value="1">Horizontal</option>
								<option value="2">Vertical</option>
							</select>
						</td>
					</tr>
					<tr class="table-danger">
						<td>
							4
						</td>
						<td>
							Barco 4
						</td>
						<td>
							<input  type="text" maxlength="1" class="input" style="width: 50px" name=""> -
							<input type="text" maxlength="1" class="input" style="width: 50px" name="">
						</td>
						<td>
							<select class="form-control" >
								<option value="1">Horizontal</option>
								<option value="2">Vertical</option>
							</select>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-md-6">
			<img alt="Image Previa" src="image/bn.jpg" width="600px" height="400px">
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<form role="form">
				<div class="form-group">
					 
					<label for="exampleInputEmail1">
						Usuario
					</label>
					<input type="user" class="form-control" id="exampleInputEmail1">
				</div>
				<button type="submit" class="btn btn-primary">
					Comenzar
				</button>
			</form>
		</div>
		<div class="col-md-6">
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>