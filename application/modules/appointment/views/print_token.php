<!DOCTYPE html>
<html>

<head>
    <title>Queue Token</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 10px;
            text-align: center;
            width: 300px;
            /* Standard thermal width approx */
        }

        .header {
            margin-bottom: 20px;
            border-bottom: 2px dashed #000;
            padding-bottom: 10px;
        }

        .hospital-name {
            font-size: 18px;
            font-weight: bold;
        }

        .token-title {
            font-size: 16px;
            margin-top: 5px;
        }

        .queue-number {
            font-size: 60px;
            font-weight: bold;
            margin: 10px 0;
        }

        .details {
            text-align: left;
            margin-top: 20px;
            font-size: 14px;
        }

        .details p {
            margin: 5px 0;
        }

        .footer {
            margin-top: 30px;
            font-size: 12px;
            border-top: 1px solid #ddd;
            padding-top: 10px;
        }

        @media print {
            body {
                width: 100%;
            }

            .no-print {
                display: none;
            }
        }
    </style>
</head>

<body onload="window.print();">

    <div class="header">
        <div class="hospital-name">
            <?php echo $settings->system_vendor; ?>
        </div>
        <div class="token-title">
            <?php echo lang('doctor_visit_queue_token'); ?>
        </div>
    </div>

    <div class="queue-number">
        #
        <?php echo $appointment->queue_number; ?>
    </div>

    <div class="details">
        <p><strong>
                <?php echo lang('patient'); ?>:
            </strong>
            <?php echo $patient->name; ?>
        </p>
        <p><strong>
                <?php echo lang('doctor'); ?>:
            </strong>
            <?php echo $doctor->name; ?>
        </p>
        <p><strong>
                <?php echo lang('date'); ?>:
            </strong>
            <?php echo date('d-m-Y h:i A', $appointment->date); ?>
        </p>
        <?php if (!empty($appointment->room_id)) { ?>
            <p><strong>
                    <?php echo lang('room_id'); ?>:
                </strong>
                <?php echo $appointment->room_id; ?>
            </p>
        <?php } ?>
    </div>

    <div class="footer">
        <?php echo lang('thank_you_for_choosing_us'); ?>
    </div>

</body>

</html>