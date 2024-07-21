<x-layout>

    <x-forms.form method="POST" action="/">

        <div class="mt-6">
            @php
                $name = '';
                $message = 'Let me know more about yourself';
            @endphp

            <x-message :name="$name" :message="$message" />
        </div>

        <div class="w-lg mx-auto p-4 text-white rounded-lg shadow-md">

            <x-forms.section>
                Personal Information
            </x-forms.section>



            <div class="mb-4 md:flex md:gap-6">

                <div class="md:flex-1 mb-4 md:mb-0">
                    <x-forms.inputText label="Full name" name="fullName" id="fullName" type="text"
                        placeholder="ex: Adam" />

                </div>


                <div class="md:flex-1">
                    <x-forms.inputText label="email" name="email" id="email" type="email"
                        placeholder="Email@email.com" />

                </div>

            </div>

            <div class="mb-4 md:flex md:gap-6">
                <div class="md:flex-1 mb-4 md:mb-0">
                    <x-forms.inputText label="Phone Number" name="tel" id="phoneNumber" type="tel"
                        placeholder="+1 (868) 579-9831" />

                </div>
                <div class="md:flex-1">

                    <x-forms.inputText label="Date of birth" name="birthDate" id="birthDate" type="date"
                        placeholder="02/02/1990" />
                </div>
            </div>
            <div class="mb-4 md:flex md:gap-6">
                <div class="md:flex-1 mb-4 md:mb-0">

                    <x-forms.inputText label="Insurance policy
                        number"
                        name="insurancePolicyNumber" id="insurancePolicyNumber" type="text"
                        placeholder="1234567890" />

                </div>
                <div class="md:flex-1">
                    <div class="flex items-center space-x-4">
                        <x-forms.radio label="Gender" name="gender" :options="['Male' => 'Male', 'Female' => 'Female', 'Other' => 'Other']" />
                    </div>
                </div>
            </div>
            <div class="mb-4 md:flex md:gap-6">
                <div class="md:flex-1 mb-4 md:mb-0">

                    <x-forms.inputText label="Occupation" name="occupation" id="occupation" type="text"
                        placeholder="Software Engineer" />

                </div>
                <div class="md:flex-1">

                    <x-forms.inputText label="Address" name="address" id="address" type="text"
                        placeholder="ex: 14 street, New York, NY - 5101" />
                </div>
            </div>
            <div class="mb-4 md:flex md:gap-6">
                <div class="md:flex-1 mb-4 md:mb-0">

                    <x-forms.inputText label="Emergency contact
                        name"
                        name="emergencyContactName" id="emergencyContactName" type="text"
                        placeholder="Guardian's name" />
                </div>
                <div class="md:flex-1">

                    <x-forms.inputText label="Emergency contact
                        name"
                        name="emergencyContactPhone" id="emergencyContactPhone" type="text"
                        placeholder="ex: +1 (868) 579-9831" />
                    {{--
                    <label for="emergencyContactPhone" class="block text-sm font-medium mb-1">Phone number</label>
                    <input type="tel" id="emergencyContactPhone" placeholder="ex: +1 (868) 579-9831"
                        class="w-full p-2 bg-gray-900 text-white border border-gray-700 rounded"> --}}
                </div>
            </div>

            <x-forms.section>
                Medical Information
            </x-forms.section>

            <div class="mb-4 md:flex md:gap-6">

                <div class="md:flex-1 mb-4 md:mb-0">
                    <x-forms.inputText label="Primary Care Physician" name="primaryCarePhysician"
                        id="primaryCarePhysician" type="text" placeholder="Dr.Madix" />

                </div>
            </div>

            <div class="mb-4 md:flex md:gap-6">
                <div class="md:flex-1 mb-4 md:mb-0">

                    <x-forms.inputText label="Insurance provider" name="insuranceProvider" id="insuranceProvider"
                        type="text" placeholder="ABC Health" />
                </div>
                <div class="md:flex-1">

                    <x-forms.inputText label="Insurance policy number" name="insurancePolicyNumber"
                        id="insurancePolicyNumber" type="text" placeholder="ex: 32154845" />
                </div>


            </div>

            <div class="mb-4 md:flex md:gap-6">
                <div class="md:flex-1 mb-4 md:mb-0">

                    <x-forms.textarea label="Allergies (if any)" name="allergies" id="allergies"
                        placeholder="ex: Peanuts, Penicillin, Pollen" />
                </div>
                <div class="md:flex-1">

                    <x-forms.textarea label="Current medications" name="currentMedications" id="currentMedications"
                        placeholder="ex: Ibuprofen 200mg, Levothyroxine 50mcg" />
                </div>

            </div>

            <div class="mb-4 md:flex md:gap-6">
                <div class="md:flex-1 mb-4 md:mb-0">

                    <x-forms.textarea label="Family medical history (if relevant)" name="medicalHistory"
                        id="medicalHistory" placeholder="ex: Mother had breast cancer" />
                </div>
                <div class="md:flex-1">

                    <x-forms.textarea label="Past medical history" name="pastMedicalHistory" id="pastMedicalHistory"
                        placeholder="ex: Asthma diagnosis in childhood" />
                </div>

            </div>

            <x-forms.section>
                Identification and Verfication
            </x-forms.section>

            <div class="mb-4 md:flex md:gap-6">

                <div class="md:flex-1 mb-4 md:mb-0">
                    <x-forms.inputText label="Primary Care Physician" name="primaryCarePhysician"
                        id="primaryCarePhysician" type="text" placeholder="Dr.Madix" />

                </div>
            </div>

            <div class="mb-4 md:flex md:gap-6">
                <div class="md:flex-1 mb-4 md:mb-0">
                    <x-forms.inputText label="Identification Number" name="identificationNumber"
                        id="identificationNumber" type="text" placeholder="ex 1234567" />

                </div>


            </div>


            <div class="mb-4 md:flex md:gap-6">
                <div class="md:flex-1 mb-4 md:mb-0">
                    <x-forms.inputText label="Upload ID" name="uploadId" id="uploadId" type="file"
                        placeholder="Upload ID" />

                </div>
            </div>
            <x-forms.button>
                Submit
            </x-forms.button>
    </x-forms.form>
</x-layout>
