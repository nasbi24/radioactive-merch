<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>UMN RadioActive 2023 | Login</title>
</head>

<body>
    <div>
        <video autoplay loop muted
            class="fixed -z-10 w-auto lg:w-full md:min-w-full md:min-h-full max-w-fit object-cover" loading="lazy">
            <source src="/images/BACKGROUND_DESKTOP.webm" type="video/webm">
        </video>
    </div>
    <div class="class=container mx-auto p-4">
        <form action="/signup" method="POST">
            <div
                class="class=flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md absolute top-2/4 left-2/4 mt-5 w-full max-w-[24rem] -translate-y-2/4 -translate-x-2/4">
                <div
                    class="relative bg-clip-border mx-4 rounded-xl overflow-hidden shadow-lg -mt-6 mb-4 grid h-28 place-items-center bg-gradient-to-r from-[#011F39] to-[#629FD4]">
                    <h3 class="block antialiased tracking-normal font-sans text-3xl font-bold leading-snug text-white">
                        Register</h3>
                </div>
                <div class="p-6 flex flex-col gap-4">
                    @csrf
                    <div class="relative w-full min-w-[200px] h-11">
                        <input name="name" type="name" placeholder="Name"
                            class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1">
                    </div>
                    <div class="relative w-full min-w-[200px] h-11">
                        <input name="email" type="email" placeholder="Email"
                            class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1">
                    </div>
                    <div class="relative w-full min-w-[200px] h-11">
                        <input name="password" type="password" placeholder="Password"
                            class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1">
                    </div>
                    <div class="relative w-full min-w-[200px] h-11 mb-3">
                        <button type="submit"
                            class="bg-gradient-to-r from-[#011F39] to-[#629FD4] hover:shadow-lg hover:shadow-blue-500/40 text-white font-bold py-2 px-4 rounded-lg block w-full">
                            Register now!
                        </button>
                        <a href="/login" class="flex justify-center py-1">Have an account? Log in here!</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
    </div>
</body>

</html>
