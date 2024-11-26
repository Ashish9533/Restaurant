<div class="flex-1 overflow-y-auto mt-12">
    <div class="mx-12 p-6  bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <section class="p-6 bg-white shadow rounded-[2rem] my-4">
            <div class="px-6 py-4">
                <h3 class="text-gray-700 font-bold text-lg">Role Available and The User access</h3>
                <p class="text-gray-600 mt-2">Experienced administrators manage user access, ensuring seamless and
                    secure operation. Their role includes monitoring permissions, handling requests, and maintaining
                    system integrity for optimal performance.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
                <div class="p-4 bg-gray-100 rounded-[1.5rem] text-start">
                    <div class="flex items-center justify-center w-8 h-8 rounded-full bg-red-500 text-white font-bold">5
                    </div>
                    <span class="text-gray-700 mt-2">Barista</span>
                </div>
                <div class="p-4 bg-gray-100 rounded-[1.5rem] text-start">
                    <div class="flex items-center justify-center w-8 h-8 rounded-full bg-gray-400 text-white font-bold">
                        3</div>
                    <span class="text-gray-700 mt-2">Cashier</span>
                </div>
                <div class="p-4 bg-gray-100 rounded-[1.5rem] text-start">
                    <div class="flex items-center justify-center w-8 h-8 rounded-full bg-gray-400 text-white font-bold">
                        15</div>
                    <span class="text-gray-700 mt-2">Kitchen Staff</span>
                </div>
                <div class="p-4 bg-gray-100 rounded-[1.5rem] text-start">
                    <div class="flex items-center justify-center w-8 h-8 rounded-full bg-gray-400 text-white font-bold">
                        10</div>
                    <span class="text-gray-700 mt-2">Waiters</span>
                </div>
                <div class="p-4 bg-gray-100 rounded-[1.5rem] text-start">
                    <div class="flex items-center justify-center w-8 h-8 rounded-full bg-gray-400 text-white font-bold">
                        3</div>
                    <span class="text-gray-700 mt-2">Cleaner</span>
                </div>
            </div>
        </section>
        <section class="p-6 bg-white shadow rounded-[2rem] my-4">
            <div class="flex px-6 py-4 border-b justify-between items-center ">
                <h3 class="text-gray-700 font-bold text-lg">Administrators Accounts <p class="text-gray-600 font-normal mt-2 ">Find all of your company's staff associated roles.</p></h3>
                
                <div class="items-center">
                    <button id="openPopupButton" class="px-3 py-2 bg-black text-white rounded-md mr-2">Manage Role & Permission</button>
                </div>
            </div>
            <div class="px-6 py-4">
                <div class="flex justify-between items-center">
                    
                    <div class="flex items-center space-x-2">
                        <span class="text-gray-700">09:13 AM</span>
                        <button class="px-3 py-2 bg-white border rounded-md">To</button>
                        <button class="px-3 py-2 bg-white border rounded-md">From</button>
                        <button class="px-3 py-2 bg-white border rounded-md">Filter</button>
                    </div>
                </div>
                <div class="mt-4 overflow-x-auto">
                    <table class="min-w-full border-collapse border border-gray-200">
                        <thead>
                            <tr class="bg-gray-100 text-gray-700">
                                <th>
                                    S.No
                                </th>
                                <th class="border border-gray-200 px-4 py-2">
                                    <select class="bg-gray-100 text-gray-700 focus:outline-none">
                                        <option>Name</option>
                                    </select>
                                </th>
                                <th class="border border-gray-200 px-4 py-2">
                                    <select class="bg-gray-100 text-gray-700 focus:outline-none">
                                        <option>Email</option>
                                    </select>
                                </th>
                                <th class="border border-gray-200 px-4 py-2">
                                    <select class="bg-gray-100 text-gray-700 focus:outline-none">
                                        <option>Role</option>
                                    </select>
                                </th>
                                <th class="border border-gray-200 px-4 py-2">
                                    <select class="bg-gray-100 text-gray-700 focus:outline-none">
                                        <option>Access</option>
                                    </select>
                                </th>
                                <th class="border border-gray-200 px-4 py-2">
                                    <select class="bg-gray-100 text-gray-700 focus:outline-none">
                                        <option>Shift</option>
                                    </select>
                                </th>
                                <th class="border border-gray-200 px-4 py-2">
                                    <select class="bg-gray-100 text-gray-700 focus:outline-none">
                                        <option>Status</option>
                                    </select>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-gray-700 border-b">
                                <td class="border border-gray-200 px-4 py-2">1</td>
                                <td class="border border-gray-200 px-4 py-2">Full name</td>
                                <td class="border border-gray-200 px-4 py-2">xyz@example.com</td>
                                <td class="border border-gray-200 px-4 py-2">Manager</td>
                                <td class="border border-gray-200 px-4 py-2">Admin</td>
                                <td class="border border-gray-200 px-4 py-2">Day Shift</td>
                                <td class="border border-gray-200 px-4 py-2">Active</td>
                            </tr>
                            <tr class="text-gray-700 border-b">
                                <td class="border border-gray-200 px-4 py-2">2</td>
                                <td class="border border-gray-200 px-4 py-2">Full name</td>
                                <td class="border border-gray-200 px-4 py-2">xyz@example.com</td>
                                <td class="border border-gray-200 px-4 py-2">Cashier</td>
                                <td class="border border-gray-200 px-4 py-2">Merchant</td>
                                <td class="border border-gray-200 px-4 py-2">Night Shift</td>
                                <td class="border border-gray-200 px-4 py-2">Inactive</td>
                            </tr>
                            <tr class="text-gray-700 border-b">
                                <td class="border border-gray-200 px-4 py-2">3</td>
                                <td class="border border-gray-200 px-4 py-2">Full name</td>
                                <td class="border border-gray-200 px-4 py-2">xyz@example.com</td>
                                <td class="border border-gray-200 px-4 py-2">Other Staff</td>
                                <td class="border border-gray-200 px-4 py-2">Customer</td>
                                <td class="border border-gray-200 px-4 py-2">Day Shift</td>
                                <td class="border border-gray-200 px-4 py-2">Active</td>
                            </tr>
                            <tr class="text-gray-700 border-b">
                                <td class="border border-gray-200 px-4 py-2">4</td>
                                <td class="border border-gray-200 px-4 py-2">Full name</td>
                                <td class="border border-gray-200 px-4 py-2">xyz@example.com</td>
                                <td class="border border-gray-200 px-4 py-2">Waiters</td>
                                <td class="border border-gray-200 px-4 py-2">Support Staff</td>
                                <td class="border border-gray-200 px-4 py-2">Night Shift</td>
                                <td class="border border-gray-200 px-4 py-2">Inactive</td>
                            </tr>
                            <tr class="text-gray-700 border-b">
                                <td class="border border-gray-200 px-4 py-2">5</td>
                                <td class="border border-gray-200 px-4 py-2">Full name</td>
                                <td class="border border-gray-200 px-4 py-2">xyz@example.com</td>
                                <td class="border border-gray-200 px-4 py-2">Waiters</td>
                                <td class="border border-gray-200 px-4 py-2">Support Staff</td>
                                <td class="border border-gray-200 px-4 py-2">Day Shift</td>
                                <td class="border border-gray-200 px-4 py-2">Active</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="flex justify-end mt-4 space-x-2">
                    <button class="px-3 py-2 bg-white border rounded-md">&lt; Previous</button>
                    <button class="px-3 py-2 bg-white border rounded-md">1</button>
                    <button class="px-3 py-2 bg-white border rounded-md">2</button>
                    <button class="px-3 py-2 bg-white border rounded-md">3</button>
                    <button class="px-3 py-2 bg-white border rounded-md">4</button>
                    <button class="px-3 py-2 bg-white border rounded-md">Next &gt;</button>
                </div>
            </div>
        </section>
    </div>
</div>