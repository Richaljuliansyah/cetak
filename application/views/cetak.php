 width="50px" align="right">
					<?php
						$angka_format = number_format($bayar);
						echo $angka_format ?>
					</td>
				</tr>
			</table>
		</div>

	<div class="u">
			<table width="100%">
				<tr>
					<td width="220px" align="right">
						<?php echo "KEMBALIAN :" ;?>     
					</td>
					<td width="65px" align="right">
					<?php
						$angka_format = number_format($kembalian);
						echo $angka_format ?>
					</td>
				</tr>
			</table>
		</div>
			</center>
			<table width="100%">
				<tr>
					<td>
						<?php echo"PPN : ";?>
					</td>
					<td align="left">
						<?php echo"DDP = ";?>
						<?php $ppn = round($total/10 *1);
						$ddp = $total-$ppn;
						$angka2 = number_format($ddp);
					echo $angka2;?>
						<?php echo"	PPN = ";?>
						<?php $ppn = round($total/10 *1) ;
						$angka = number_format($ppn);
					echo $angka;?>
				</tr>
			</table>
			<center>
			LAYANAN KONSUMEN SMS 0811 1500 280 <br>
			CALL 1500 280 - KONTAK@INDOMARET <BR>
			<center>
		
	</div>
	<script>
		window.print()
	</script>
</body>
</html>