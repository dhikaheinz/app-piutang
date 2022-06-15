<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Averia+Sans+Libre:wght@300&display=swap" rel="stylesheet">
        <!-- font -->
            <script src="https://cdn.tailwindcss.com"></script>
            <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css"> -->
            <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
            <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script> -->
        <script
                type="module"
                src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
            ></script>
            <script
                nomodule
                src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
            ></script>

        <style>
        body{
            font-family: 'Averia Sans Libre', cursive;
        }
        </style>
	</head>
	<body class="bg-[#232222] text-[#d4d8d9]">
    <!-- nav -->
  <nav
			class="fixed left-0 top-0 w-full p-3 bg-transparent md:flex md:items-center md:justify-between md:px-[100px] transition-all"
		>
			<div class="flex justify-between items-center">
				<span class="text-lg md:text-2xl uppercase font-bold text-[#d4d8d9]">
					<!-- <img
						class="w-10 inline mr-3 hover:scale-110"
						src="https://akupintar.id/documents/20143/0/Poltekkes+Jakarta+I.jpg"
					/> -->
					<span>Data Hutang</span>
				</span>

				<span class="text-3xl cursor-pointer md:hidden block mx-2">
					<ion-icon
						name="menu"
						onclick="Menu(this)"
					></ion-icon>
				</span>
			</div>

			<ul
				class="md:flex md:items-center md:bg-transparent bg-[#3BACB6] z-[10] md:z-auto md:static absolute w-full left-0 md:w-auto md:py-0 py-2 px-2 md:pl-0 md:opacity-100 opacity-0 top-[-400px] transition-all"
			>
				<!-- <li class="px-4 py-3 md:my-0 hover:bg-[#32929b] h-full">
					<a href="#" class="text-xl text-white font-semibold hover:text-black"
						>Home</a
					>
				</li>
				<li class="px-4 py-3 md:my-0 hover:bg-[#32929b] h-full">
					<a href="#" class="text-xl text-white font-semibold hover:text-black"
						>About</a
					>
				</li>
				<li class="px-4 py-3 md:my-0 hover:bg-[#32929b] h-full">
					<a href="//base_url('user/logout')" class="text-xl text-white font-semibold hover:text-black"
						>Logout</a
					>
				</li> -->
			</ul>
		</nav>
    <!-- close nav -->

    <div id="content" class="">
		<div class="flex justify-center min-h-screen transition-all flex-col">
        <!-- Login Form -->
			<div class="dashboard flex items-center justify-center rounded-lg flex-col md:flex-row gap-3 transition-all ">
			<h3 class="md:-mt-[266px] md:-mr-36 font-bold text-2xl text-[#d4d8d9]">Data Customer</h3>
            <div class="profil-detail flex items-center justify-center w-52 flex-col p-3 shadow-lg rounded-lg bg-[#d4d8d9]">
					<a href="#" class="w-full bg-[#232222] p-2 rounded-md hover:bg-[#8b8d8e] hover:text-[#232222]">
                        <p class="w-full">Input Data</p>
                    </a>
				</div>	
                <div class="profil-detail flex items-center justify-center flex-col p-3 shadow-lg rounded-lg bg-[#d4d8d9]">
                    <div class="p-1 border-b border-gray-200">
                        <table class="divide-y divide-gray-300 w-full" id="dataTable">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="px-6 py-2 text-lg text-gray-500">
                                        Name Customer
                                    </th>
                                    <th class="px-6 py-2 text-lg text-gray-500">
                                        Tgl Masuk
                                    </th>
                                    <th class="px-6 py-2 text-lg text-gray-500">
                                        Hutang
                                    </th>
                                    <th class="px-6 py-2 text-lg text-gray-500">
                                        Sisa Hutang
                                    </th>
                                    <th class="px-6 py-2 text-lg text-gray-500">
                                        Option
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-500">
                                <?php foreach($data_cust->result_array() as $row) {?>
                                <tr class="whitespace-nowrap">
                                    <td class="px-6 py-4 text-center">
                                        <div class="text-md text-gray-900">
                                            <?= $row['nama_customer']; ?>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div class="text-md text-gray-500">
                                            <?= $row['tgl_masuk']; ?>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-md text-center text-gray-500">
                                        <?= $row['hutang']; ?>
                                    </td>
                                    <td class="px-6 py-4 text-center text-gray-500">
                                        <?= $row['sisa_hutang']; ?>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <a href="#" class="px-4 py-1 text-md text-[#232222] bg-blue-300 rounded-full">Update</a>
                                        <a href="#" class="px-4 py-1 text-md text-[#232222] bg-red-200 rounded-full">Delete</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
				</div>
			</div>
        <!-- Login Form -->
     	</div>
    </div>

    <!-- Footer -->
		<footer
			class="bottom-0 left-0 transition-all mt-20 lg:mt-40 flex justify-center items-center h-14 absolute w-full bg-[#d4d8d9] shadow"
		>
			<div class="container mx-auto flex justify-center items-center">
				<div>
					<p class="text-[#4bbcc7] md:text-[#232222]">
						Copyright © 2022
						<span class="font-semibold sm:inline-block hidden"
							>Adhika</span
						>
					</p>
					<p class="text-[#232222]">
						<span class="font-semibold block sm:hidden"
							>Hutang Apps v.1</span
						>
					</p>
				</div>
			</div>
		</footer>
		<!-- Footer Close -->
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>

      <script>
			function Menu(e) {
				let list = document.querySelector("ul");
				e.name === "menu"
					? ((e.name = "close"),
					  list.classList.add("top-[70px]"),
					  list.classList.add("opacity-100"))
					: ((e.name = "menu"),
					  list.classList.remove("top-[70px]"),
					  list.classList.remove("opacity-100"));
			}

            $(document).ready(function () {
                $('#dataTable').DataTable({
                    // script untuk membuat export data 
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
                })
            });
		</script>
	</body>
</html>
