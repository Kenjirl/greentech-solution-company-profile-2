@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <div class="w-full mb-8 flex flex-col items-center justify-center gap-4">
        <p class="w-3/4 text-center">
            If you are interested in learning more about GreenTech and how we can save you money on utility and maintenance costs, simply fill out the contact form below, and one of our friendly, knowledgeable staff members will follow up with you promptly.
        </p>
    </div>

    <div class="w-full flex items-center justify-center gap-8">
        <div class="w-full">
            <form class="w-3/4 mx-auto flex flex-col items-center justify-center gap-4"
                action="#" method="post" onsubmit="showAlert(event)">
                <div class="w-full flex flex-col gap-2">
                    <label class="font-semibold"
                        for="name">Name</label>
                    <input class="w-full p-2 border border-slate-900 rounded-lg text-sm"
                        type="text" name="name" id="name" placeholder="john doe" autofocus>
                </div>
                <div class="w-full flex flex-col gap-2">
                    <label class="font-semibold"
                        for="email">Email</label>
                    <input class="w-full p-2 border border-slate-900 rounded-lg text-sm"
                        type="email" name="email" id="email" placeholder="johndoe@gmail.com">
                </div>
                <div class="w-full flex flex-col gap-2">
                    <label class="font-semibold"
                        for="message">Message</label>
                    <textarea class="w-full p-2 border border-slate-900 rounded-lg text-sm resize-none"
                        name="message" id="message" placeholder="your message goes here" rows="3"></textarea>
                </div>

                <button class="w-4/5 mx-auto p-2 rounded-full bg-slate-900 font-semibold text-lime-300 active:bg-slate-700 transition-colors cursor-pointer"
                    type="submit">Send Message</button>
            </form>
        </div>

        <div class="w-full p-4 flex flex-col items-start justify-start gap-2 bg-slate-900 rounded-[2em] text-white">
            <iframe class="w-full aspect-video rounded-[calc(2em-16px)]"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3233.1330242949625!2d-78.5928074490953!3d35.87025682709171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89ac59a1b2c199a9%3A0xc1a80ba0efac75e0!2sgreentech%20solutions%20group!5e0!3m2!1sen!2sus!4v1579805486514!5m2!1sen!2sus"
                frameborder="0"></iframe>
            <h2 class="text-3xl font-semibold">
                GreenTech Solutions Group, LLC.
            </h2>
            <p>2700 Sumner Blvd. <br>Suite 124 <br>Raleigh, NC27616</p>
            <p>
                Phone:
                <a class="text-sky-300"
                    href="tel:9193229202">919.322.9202</a>
            </p>
            <p><a class="text-sky-300"
                href="mailto:info@greentechnc.com">info@greentechnc.com</a></p>
        </div>
    </div>

    <script>
        function showAlert(event) {
            event.preventDefault();
            alert("Form ini hanya panjangan 😁");
        }
    </script>
@endsection
