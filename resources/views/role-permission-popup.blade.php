<!-- Popup Form -->
<div id="popupForm" class="fixed inset-0 bg-opacity-50 flex items-center justify-center hidden z-50">
    <div id="popupInnerForm" class="bg-gray-400 rounded-lg shadow-xl w-[800px] max-w-full p-6 relative">
        <!-- Header -->
        <div class="flex justify-between items-center">
            <h2 class="text-xl font-semibold text-white">Add Role & Permission</h2>
            <button class="text-black bg-white px-4 py-2 rounded-lg hover:text-white hover:bg-black font-semibold">
                + Add Role
            </button>
            <!-- <button
            id="closePopupButton"
            class="text-gray-500 hover:text-gray-700"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="2"
              stroke="currentColor"
              class="w-6 h-6"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M6 18L18 6M6 6l12 12"
              />
            </svg>
          </button> -->
        </div>

        <!-- Table -->
        <div class="mt-6 overflow-x-auto">
            <table class="w-full border ">
                <thead>
                    <tr>
                        <th
                            class="text-left px-4 py-2 text-sm text-nowrap text-white border-b border-r border-gray-100">
                            Access Profile</th>
                        <th
                            class="text-center px-4 py-2 text-sm text-nowrap text-white border-b border-r border-gray-200">
                            View</th>
                        <th
                            class="text-center px-4 py-2 text-sm text-nowrap text-white border-b border-r border-gray-200">
                            Add</th>
                        <th
                            class="text-center px-4 py-2 text-sm text-nowrap text-white border-b border-r border-gray-200">
                            Edit</th>
                        <th
                            class="text-center px-4 py-2 text-sm text-nowrap text-white border-b border-r border-gray-200">
                            Delete</th>
                        <th
                            class="text-center px-4 py-2 text-sm text-nowrap text-white border-b border-r border-gray-200">
                            Assign</th>
                        <th
                            class="text-center px-4 py-2 text-sm text-nowrap text-white border-b border-r border-gray-200">
                            Dissociate</th>
                        <th class="text-center px-12 py-2 border-b border-r border-gray-200">
                        </th>
                        <th class=" px-12 py-2 border-b border-r border-gray-200">
                            <div class="flex space-x-2">
                                <p class="text-sm text-white text-nowrap">Select All</p>
                                <input type="checkbox" id="selectAllView"
                                    class="form-checkbox w-5 h-5 shadow-md rounded-lg bg-gray-100 border-gray-300" />
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Row Template -->
                    <tr>
                        <td class="px-4 py-2 text-white text-nowrap border-r border-gray-200">Admin</td>
                        <td class="text-center px-4 py-2 border-r border-gray-200">
                            <input type="checkbox"
                                class="form-checkbox w-5 h-5 shadow-md rounded-lg bg-gray-100 border-gray-300 view-checkbox" />
                        </td>
                        <td class="text-center px-4 py-2 border-r border-gray-200">
                            <input type="checkbox"
                                class="form-checkbox w-5 h-5 shadow-md rounded-lg bg-gray-100 border-gray-300" />
                        </td>
                        <td class="text-center px-4 py-2 border-r border-gray-200">
                            <input type="checkbox"
                                class="form-checkbox w-5 h-5 shadow-md rounded-lg bg-gray-100 border-gray-300" />
                        </td>
                        <td class="text-center px-4 py-2 border-r border-gray-200">
                            <input type="checkbox"
                                class="form-checkbox w-5 h-5 shadow-md rounded-lg bg-gray-100 border-gray-300" />
                        </td>
                        <td class="text-center px-4 py-2 border-r border-gray-200">
                            <input type="checkbox"
                                class="form-checkbox w-5 h-5 shadow-md rounded-lg bg-gray-100 border-gray-300" />
                        </td>
                        <td class="text-center px-4 py-2 border-r border-gray-200">
                            <input type="checkbox"
                                class="form-checkbox w-5 h-5 shadow-md rounded-lg bg-gray-100 border-gray-300" />
                        </td>
                        <td class="text-center px-4 py-2 border-r border-gray-200">

                        </td>
                        <td class="text-center px-4 py-2 border-r border-gray-200">
                            <input type="checkbox"
                                class="form-checkbox w-5 h-5 shadow-md rounded-lg bg-gray-100 border-gray-300" />
                        </td>
                    </tr>
                    <!-- Repeat Rows -->
                    <tr>
                        <td class="px-4 py-2 text-white text-nowrap border-r border-gray-200">Merchant</td>
                        <td class="text-center px-4 py-2 border-r border-gray-200">
                            <input type="checkbox"
                                class="form-checkbox w-5 h-5 shadow-md rounded-lg bg-gray-100 border-gray-300 view-checkbox" />
                        </td>
                        <td class="text-center px-4 py-2 border-r border-gray-200">
                            <input type="checkbox"
                                class="form-checkbox w-5 h-5 shadow-md rounded-lg bg-gray-100 border-gray-300" />
                        </td>
                        <td class="text-center px-4 py-2 border-r border-gray-200">
                            <input type="checkbox"
                                class="form-checkbox w-5 h-5 shadow-md rounded-lg bg-gray-100 border-gray-300" />
                        </td>
                        <td class="text-center px-4 py-2 border-r border-gray-200">
                            <input type="checkbox"
                                class="form-checkbox w-5 h-5 shadow-md rounded-lg bg-gray-100 border-gray-300" />
                        </td>
                        <td class="text-center px-4 py-2 border-r border-gray-200">
                            <input type="checkbox"
                                class="form-checkbox w-5 h-5 shadow-md rounded-lg bg-gray-100 border-gray-300" />
                        </td>
                        <td class="text-center px-4 py-2 border-r border-gray-200">
                            <input type="checkbox"
                                class="form-checkbox w-5 h-5 shadow-md rounded-lg bg-gray-100 border-gray-300" />
                        </td>
                        <td class="text-center px-4 py-2 border-r border-gray-200">

                        </td>
                        <td class="text-center px-4 py-2 border-r border-gray-200">
                            <input type="checkbox"
                                class="form-checkbox w-5 h-5 shadow-md rounded-lg bg-gray-100 border-gray-300" />
                        </td>
                    </tr>

                    <!-- Repeat Rows -->
                    <tr>
                        <td class="px-4 py-2 text-white text-nowrap border-r border-gray-200">Customer</td>
                        <td class="text-center px-4 py-2 border-r border-gray-200">
                            <input type="checkbox"
                                class="form-checkbox w-5 h-5 shadow-md rounded-lg bg-gray-100 border-gray-300 view-checkbox" />
                        </td>
                        <td class="text-center px-4 py-2 border-r border-gray-200">
                            <input type="checkbox"
                                class="form-checkbox w-5 h-5 shadow-md rounded-lg bg-gray-100 border-gray-300" />
                        </td>
                        <td class="text-center px-4 py-2 border-r border-gray-200">
                            <input type="checkbox"
                                class="form-checkbox w-5 h-5 shadow-md rounded-lg bg-gray-100 border-gray-300" />
                        </td>
                        <td class="text-center px-4 py-2 border-r border-gray-200">
                            <input type="checkbox"
                                class="form-checkbox w-5 h-5 shadow-md rounded-lg bg-gray-100 border-gray-300" />
                        </td>
                        <td class="text-center px-4 py-2 border-r border-gray-200">
                            <input type="checkbox"
                                class="form-checkbox w-5 h-5 shadow-md rounded-lg bg-gray-100 border-gray-300" />
                        </td>
                        <td class="text-center px-4 py-2 border-r border-gray-200">
                            <input type="checkbox"
                                class="form-checkbox w-5 h-5 shadow-md rounded-lg bg-gray-100 border-gray-300" />
                        </td>
                        <td class="text-center px-4 py-2 border-r border-gray-200">

                        </td>
                        <td class="text-center px-4 py-2 border-r border-gray-200">
                            <input type="checkbox"
                                class="form-checkbox w-5 h-5 shadow-md rounded-lg bg-gray-100 border-gray-300" />
                        </td>
                    </tr>

                    <!-- Repeat Rows -->
                    <tr>
                        <td class="px-4 py-2 text-white text-nowrap border-r border-gray-200">Support Staff</td>
                        <td class="text-center px-4 py-2 border-r border-gray-200">
                            <input type="checkbox"
                                class="form-checkbox w-5 h-5 shadow-md rounded-lg bg-gray-100 border-gray-300 view-checkbox" />
                        </td>
                        <td class="text-center px-4 py-2 border-r border-gray-200">
                            <input type="checkbox"
                                class="form-checkbox w-5 h-5 shadow-md rounded-lg bg-gray-100 border-gray-300" />
                        </td>
                        <td class="text-center px-4 py-2 border-r border-gray-200">
                            <input type="checkbox"
                                class="form-checkbox w-5 h-5 shadow-md rounded-lg bg-gray-100 border-gray-300" />
                        </td>
                        <td class="text-center px-4 py-2 border-r border-gray-200">
                            <input type="checkbox"
                                class="form-checkbox w-5 h-5 shadow-md rounded-lg bg-gray-100 border-gray-300" />
                        </td>
                        <td class="text-center px-4 py-2 border-r border-gray-200">
                            <input type="checkbox"
                                class="form-checkbox w-5 h-5 shadow-md rounded-lg bg-gray-100 border-gray-300" />
                        </td>
                        <td class="text-center px-4 py-2 border-r border-gray-200">
                            <input type="checkbox"
                                class="form-checkbox w-5 h-5 shadow-md rounded-lg bg-gray-100 border-gray-300" />
                        </td>
                        <td class="text-center px-4 py-2 border-r border-gray-200">

                        </td>
                        <td class="text-center px-4 py-2 border-r border-gray-200">
                            <input type="checkbox"
                                class="form-checkbox w-5 h-5 shadow-md rounded-lg bg-gray-100 border-gray-300" />
                        </td>
                    </tr>

                    <!-- Repeat Rows -->
                    <tr>
                        <td class="px-4 py-2 text-white text-nowrap border-b border-r border-gray-200">Other Staff</td>
                        <td class="text-center px-4 py-2 border-b border-r border-gray-200">
                            <input type="checkbox"
                                class="form-checkbox w-5 h-5 shadow-md rounded-lg bg-gray-100 border-gray-300 view-checkbox" />
                        </td>
                        <td class="text-center px-4 py-2 border-b border-r border-gray-200">
                            <input type="checkbox"
                                class="form-checkbox w-5 h-5 shadow-md rounded-lg bg-gray-100 border-gray-300" />
                        </td>
                        <td class="text-center px-4 py-2 border-b border-r border-gray-200">
                            <input type="checkbox"
                                class="form-checkbox w-5 h-5 shadow-md rounded-lg bg-gray-100 border-gray-300" />
                        </td>
                        <td class="text-center px-4 py-2 border-b border-r border-gray-200">
                            <input type="checkbox"
                                class="form-checkbox w-5 h-5 shadow-md rounded-lg bg-gray-100 border-gray-300" />
                        </td>
                        <td class="text-center px-4 py-2 border-b border-r border-gray-200">
                            <input type="checkbox"
                                class="form-checkbox w-5 h-5 shadow-md rounded-lg bg-gray-100 border-gray-300" />
                        </td>
                        <td class="text-center px-4 py-2 border-b border-r border-gray-200">
                            <input type="checkbox"
                                class="form-checkbox w-5 h-5 shadow-md rounded-lg bg-gray-100 border-gray-300" />
                        </td>
                        <td class="text-center px-4 py-2 border-b border-r border-gray-200">

                        </td>
                        <td class="text-center px-4 py-2 border-r border-gray-200">
                            <input type="checkbox"
                                class="form-checkbox w-5 h-5 shadow-md rounded-lg bg-gray-100 border-gray-300" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Footer Buttons -->
        <div class="mt-6 flex justify-end gap-4">
            <!-- <button
            class="px-6 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600"
          >
            Cancel
          </button> -->
            <button class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                Save
            </button>
        </div>
    </div>
</div>