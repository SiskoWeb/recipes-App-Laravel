

<header class="mb-10">
	<nav
		class="
         z-10 w-full px-4 py-1 bg-white shadow-md border-slate-500 dark:bg-[#0c1015] transition duration-700 ease-out"
	>
		<div class="flex justify-between p-4">
			<a href="/" class="text-[2rem] leading-[3rem] tracking-tight font-bold text-black dark:text-white">
				Recipes
			</a>
			<div class="flex items-center space-x-4 text-lg font-semibold tracking-tight">
@guest

<a href="/login">Login</a>
@endguest
@auth()
<a href="/admin">Dashboard</a>

@endauth
			</div>
		</div>
	</nav>



</header>
